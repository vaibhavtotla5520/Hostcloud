<?php
require_once "basicTemplates/header.php";
?>

<body class="host_version">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <h4 class="modal-title">Reset Password</h4>
            </div>
            <div class="modal-body customer-box row">
                <div class="col-md-12">
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <!-- Registration Form Starts -->
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="password" placeholder="Registered Email or Phone" type="text">
                                        <label class="form-label" id="checkPassword">*this filed can not be empty</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="cnf_password" placeholder="Confirm Password" type="password">
                                        <label class="form-label" id="checkCnfPassword">*this filed can not be empty</label>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1" id="submitButton">Get Link on mail</button>
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1" onclick="window.location = 'customer_login.php';">Cancel</button>
                                    <!-- <a class="for-pwd" href="customer_login.php">Back to login</a> -->
                                </div>
                            </form>
                            <!-- Registration Form Ends -->
                        </div>
                        <div class="tab-pane" id="Registration">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // console.log("test1");
    $(document).ready(function() {
        // $("#checkName").hide();
        // $("#checkEmail").hide();
        $("#checkPassword").hide();
        // $("#checkCnfPassword").hide();
        // $("#checkMobile").hide();

        $("#submitButton").click(function() {
            // let checkName = $("#name").val();
            // let checkEmail = $("#email").val();
            let checkPassword = $("#password").val();
            // let checkCnfPassword = $("#cnf_password").val();
            // let checkMobile = $("#mobile").val();
            // let validation_name = true;
            // let validation_email = true;
            // let validation_mobile = true;
            let validation_password = true;
            // let validation_cnfPassword = true;
            // if (checkName.length == '') {
            //     $("#checkName").show();
            // } else if (checkName.length < 3 || checkName.length > 51) {
            //     $("#checkName").show();
            //     $("#checkName").html("* Enter your full name");
            // } else {
            //     $("#checkName").hide();
            //     validation_name = false;
            // }

            // if (checkEmail.length == '') {
            //     $("#checkEmail").show();
            // } else if (IsEmail(checkEmail) == false) {
            //     $("#checkEmail").show();
            //     $("#checkEmail").html("* Invalid Email");
            // } else {
            //     $("#checkEmail").hide();
            //     validation_email = false;
            // }

            // if (checkMobile.length == '') {
            //     $("#checkMobile").show();
            // } else if (checkMobile.length != 10) {
            //     $("#checkMobile").show();
            //     $("#checkMobile").html("* Mobile requires 10 characters");
            // } else if (IsMobile(checkMobile) == false) {
            //     $("#checkMobile").show();
            //     $("#checkMobile").html("* Invalid Mobile");
            // } else {
            //     $("#checkMobile").hide();
            //     validation_mobile = false;
            // }

            if (checkPassword.length == '') {
                $("#checkPassword").show();
            } else if (checkPassword.length >= 8 && checkPassword.length <= 16) {
                alert('Here');
                $("#checkPassword").show();
                $("#checkPassword").html("Password must have minimum 8 characters and maximum 16, and must contain a upper case , a lower case, a digit and a special character");
            } else {
                $("#checkPassword").hide();
                validation_password = false;
            }

            // if (checkCnfPassword.length == '') {
            //     $("#checkCnfPassword").show();
            // } else if (checkCnfPassword != checkPassword) {
            //     $("#checkCnfPassword").show();
            //     $("#checkCnfPassword").html("Password Doesn't match");
            // } else {
            //     $("#checkCnfPassword").hide();
            //     validation_cnfPassword = false;
            // }

            if (!validation_password) { //!validation_name && !validation_email && !validation_mobile) {
                $.ajax({
                    url: "",
                    type: "post",
                    data: {
                        // "name": checkName,
                        // "email": checkEmail,
                        // "mobile": checkMobile,
                        "password": checkPassword,
                        // "confirm_password": checkCnfPassword
                    },
                    success: function(result) {
                        alert(result);
                    }
                });
            }
        });
    });

    // function IsEmail(email) {
    //     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //     if (!regex.test(email)) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }

    // function IsMobile(mobile) {
    //     var regex = /^[0-9-+]+$/;
    //     if (!regex.test(mobile)) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }
</script>

</html>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>