<?php
if ($_POST['show'] == 1) {
    $user_id = !empty($_POST['user_id']) ? $_POST['user_id'] : '';
    $user_name = !empty($_POST['user_name']) ? $_POST['user_name'] : '';
    $sql = "SELECT ticket_id,title,query,attachments,created_on FROM user_tickets WHERE user_id='$user_id' OR user_name='$user_name'";
    require_once 'db_connect.php';
    mysqli_close($link);
    if ($result = $mysqli->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $ticket_id = $row['ticket_id'];
            $title = $row['title'];
            $query = $row['query'];
            $attachments = $row['attachments'];
            $file_attached = explode('|', $attachments);
            $created_on = $row['created_on'];
?>
            <tr>
                <td>
                    <h6>Created On: <b><?php echo $created_on; ?></b></h6>
                    <h6>Ticket ID: <b>#<?php echo $ticket_id; ?></b></h6>
                    <h6>Title: <b><?php echo $title; ?></b></h6>
                    <div>
                        <h6>Query: </h6>
                        <pre><?php echo $query; ?></pre>
                        <h6>Attachments: </h6>
                        <ul style="list-style-type: none;">
                            <?php
                            foreach ($file_attached as $value) {
                                echo "<li><a href='images/ticketAttachments/" . $value . "' target='_blank'>" . $value . "</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </td>
            </tr>
<?php
        }
    } else {
        echo "Oops Nothing to show...";
    }
}
$mysqli->close();
?>