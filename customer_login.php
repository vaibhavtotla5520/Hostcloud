<?php
$login_email = $login_password = $login_email_err = $login_password_err = "";
if (isset($_POST['Login'])) {
    if (!empty($_POST['login_email'])) {
        $login_email = $_POST['login_email'];
    } else {
        $login_email_err = "* This field can't be empty";
    }
    if ($_POST['login_password']) {
        $login_password = $_POST['login_password'];
    } else {
        $login_password_err = "* This field can't be empty";
    }
    require_once "db_connect.php";
    session_start();

    if (!empty($login_email) && !empty($login_password)) {
        $value = mysqli_fetch_assoc(mysqli_query($link, "SELECT user_name,ID FROM users WHERE user_email = '" . $login_email . "' AND user_password = '" . $login_password . "'"));
        if ($value) {
            $_SESSION['user_id'] = $value['ID'];
            $_SESSION['User'] = $value['user_name'];
            $_SESSION['loggedin'] = true;
            header("location:user_dashboard.php");
        } else {
            $invalid = "* Username and *Password are Invalid";
        }
    }
}

$newUsrMail = $newUsrName = '';
if(!empty($_GET['newUsrMail']) && !empty($_GET['newUsrName'])) {
    $newUsrMail = $_GET['newUsrMail'];
    $newUsrName = $_GET['newUsrName'];
}
require_once "basicTemplates/header.php";
?>

<body class="host_version">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <h4 class="modal-title">Customer Login...</h4>
            </div>
            <div class="modal-body customer-box row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <!--<ul class="nav nav-tabs">-->
                    <!--    <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>-->
                    <!--</ul>-->
                    <h1><?php echo !empty($newUsrName)? "Hello, ".$newUsrName : "" ; ?></h1>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <label></label>
                            <form role="form" class="form-horizontal" method="post" action="" id="login_form">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label><?php echo $login_email_err; ?></label>
                                        <input class="form-control" id="login_email" placeholder="Email" type="email" name="login_email" value="<?php echo !empty($newUsrMail)? $newUsrMail : "" ; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label><?php echo $login_email_err; ?></label>
                                        <input class="form-control" id="login_password" placeholder="Password" type="password" name="login_password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10"><input type="submit" name="Login" value="Login" class="btn btn-light btn-radius btn-brd grd1">
                                        <a class="for-pwd" href="passwordReset.php">Forgot your password ?</a>
                                        <a class="for-pwd" href="customer_register.php">New here ?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>