<!-- Font Awesome
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">-->

<?php
/**
 * Created by PhpStorm.
 * User: Uv
 * Date: 11/27/2018
 * Time: 7:41 PM
 */



include('MainController.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome.css">
    <!-- Bootstrap core CSS -->
    <link href="design.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="materialdesign.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>
</head>
<body>
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Register Demo</h4>
</div>
<form method="post" action="register.php">
    <?php include('errors.php'); ?>


    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" name="username" value="<?php echo $username; ?>" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Your Name</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" name="email" value="<?php echo $email; ?>" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your Email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" name="password_1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Your Password</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" name="password_2" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">confirm Password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" class="btn" name="reg_user">Sign up</button>
            </div>
        </div>
    </div>

    <div class="modal-footer d-flex justify-content-center">
        Already a member? <a href="login.php">Sign in</a>
    </div>

</form>
</body>
</html>