<?php
session_start();
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true) {
    header("Location:index.php");
    exit();
}
$user_id = '';
if (!empty($_SESSION['User']) && !empty($_SESSION['user_id'])) {
    $user_name = $_SESSION['User'];
    $user_id = $_SESSION['user_id'];
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("location:customer_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile : <?php echo $user_name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="user_dashboard_css/styles.css" rel="stylesheet" />
    <link href="css/loader.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href=""><?php echo $user_name; ?></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="user_dashboard.php?logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="#" id="generate_ticket">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Generate Ticket
                        </a>
                        <a class="nav-link" href="#" id="show_ticket">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Recent Tickets
                        </a>

                    </div>
                    <div class="sb-sidenav-footer">
                        <!-- <div class="small">Logged in as:</div>
                        <?php //echo $user_name; 
                        ?> -->
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Hostings</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Domains</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Wallet</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Payment Due</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="loader" style="visibility:hidden;"></div>
                    <div class="card mb-4">
                        <div class="card-header" style="display: none;">
                            <i class="fas fa-table me-1"></i>

                        </div>
                        <div id="generate_ticket_form" class="container" style="display: none;">
                            <h2>Generate Ticket</h2><br>
                            <!-- Ticket Form Starts -->
                            <form method="post" id="ticket_form">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Query</label>
                                    <textarea class="form-control" id="query" rows="10" name="query"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Attachments</label>
                                    <input class="form-control mb-1" type="file" id="attachments1" name="attachments1">
                                    <input class="form-control mb-1" type="file" id="attachments2" name="attachments2">
                                    <input class="form-control mb-1" type="file" id="attachments3" name="attachments3">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary mb-3" id="send">Send</button>
                            </form>
                            <!-- Ticket Form Ends -->
                        </div>
                        <div id="show_ticket_table" class="container" style="display: none;">
                            <h2>Recent Tickets</h2><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Ticket ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Created On</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="container" id="details" style="display:none;">
                            <h2>Ticket Details</h2><br>
                            <!-- Ticket Details Starts -->
                            <form method="post" id="ticket_form">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Ticket ID</label>
                                    <input type="text" class="form-control" id="ticketid" placeholder="#" value="#" name="ticketid">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary mb-3" id="send">Send</button>
                            </form>
                            <div>
                                <table class="table">
                                    <tbody id="details_table">

                                    </tbody>
                                </table>
                            </div>
                            <!-- Ticket Details Ends -->
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        /* Show Ticket Section Starts */
        $(document).ready(function() {
            $("#show_ticket").click(function() {
                $('.loader').css("visibility", "visible");
                $("#show_ticket_table").toggle();
                $.ajax({
                    type: "POST",
                    url: 'show_tickets.php',
                    data: {
                        show: 1,
                        user_name: "<?php echo $user_name; ?>",
                        user_id: "<?php echo $user_id; ?>",
                    },
                    success: function(response) {
                        $('.loader').css("visibility", "hidden");
                        console.log(response);
                        $('tbody').html(response);
                    }
                });
            });
            /* Show Ticket Section Ends */

            /* Detailed Ticket Section Starts */
            $("#detail_ticket").click(function() {
                $('.loader').css("visibility", "visible");
                $("#details").toggle();
                $.ajax({
                    type: "POST",
                    url: 'tickets_details.php',
                    data: {
                        show: 1,
                        user_name: "<?php echo $user_name; ?>",
                        user_id: "<?php echo $user_id; ?>",
                    },
                    success: function(response) {
                        $('.loader').css("visibility", "hidden");
                        // alert(response);
                        $('#details_table').html(response);
                    }
                });
            });
            /* Detailed Ticket Section Ends */

            /* Generate Ticket Section Starts */
            $("#generate_ticket").click(function() {
                $("#generate_ticket_form").toggle();
            });
            var user_name = '<?php echo $user_name; ?>';
            var user_id = '<?php echo $user_id; ?>';
            $('#ticket_form').submit(function(e) {
                $('.loader').css("visibility", "visible");
                var data = new FormData();

                //Form data
                var form_data = $('#ticket_form').serializeArray();
                $.each(form_data, function(key, input) {
                    data.append(input.name, input.value);
                });

                //Attachments File data
                var file_data1 = $('input[name="attachments1"]')[0].files;
                var file_data2 = $('input[name="attachments2"]')[0].files;
                var file_data3 = $('input[name="attachments3"]')[0].files;
                for (var i = 0; i < file_data1.length; i++) {
                    data.append("attachments1[]", file_data1[i]);
                }
                for (var i = 0; i < file_data2.length; i++) {
                    data.append("attachments2[]", file_data2[i]);
                }
                for (var i = 0; i < file_data3.length; i++) {
                    data.append("attachments3[]", file_data3[i]);
                }
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'process_tickets.php',
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(response) {
                        $('.loader').css("visibility", "hidden");
                        console.log(response);
                        $('#generate_ticket_form').css("display", "none");
                        document.querySelector("#show_ticket").click();
                        // location.reload(true);
                    }
                });
            });
            /* Generate Ticket Section Ends */
        });
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="user_dashboard_js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="user_dashboard_assets/demo/chart-area-demo.js"></script>
    <script src="user_dashboard_assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="user_dashboard_js/datatables-simple-demo.js"></script>
</body>

</html>