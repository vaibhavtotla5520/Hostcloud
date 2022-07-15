 <?php
if ($_POST['show'] == 1) {
    $user_id = !empty($_POST['user_id']) ? $_POST['user_id'] : '';
    $user_name = !empty($_POST['user_name']) ? $_POST['user_name'] : '';
    $sql = "SELECT ticket_id,title,created_on FROM user_tickets WHERE user_id='$user_id' OR user_name='$user_name'";
    require_once 'db_connect.php';
    mysqli_close($link);
    if ($result = $mysqli->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $ticket_id = $row['ticket_id'];
            $title = $row['title'];
            // $attachments = $row['attachments'];
            // $file_attached = explode('|', $attachments);
            $created_on = $row['created_on'];
?>
            <tr>
                <th scope="row"><?php echo "#" . $ticket_id; ?></th>
                <!-- <td>
                    <pre><?php //echo $query; 
                            ?></pre>
                </td> -->
                <td>
                    <?php echo $title; ?>
                    <!-- <ul style="list-style-type: none;">
                        <?php
                        // foreach ($file_attached as $value) {
                        //     echo "<li><a href='images/ticketAttachments/" . $value . "' target='_blank'>" . $value . "</a></li>";
                        // }
                        ?>
                    </ul> -->
                </td>
                <td><?php echo $created_on; ?></td>
            </tr>
<?php
        }
    } else {
        echo "Oops Nothing to show...";
    }
}
$mysqli->close();
?>