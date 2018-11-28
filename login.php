<?php
/**
 * Created by PhpStorm.
 * User: Uv
 * Date: 11/27/2018
 * Time: 7:41 PM
 */
include('MainController.php') ?>

<html>
<head>
    <title>Register User</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>


</head>
<body class="table-light btn-outline-red">
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Login Demo</h4>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>


    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <img src="bishal.jpg"
                     alt="avatar" class="rounded-circle img-responsive">
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" name="username" class="form-control validate" placeholder="Email">
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>

            </div>
            <div class="text-center mt-4">
                <button class="btn btn-red mt-1" type="submit" name="login_user">Login
                    <i class="fa fa-sign-in ml-1"></i></button>
            </div>
        </div>
    </div>

    <div class="modal-footer d-flex justify-content-center">
        Not yet a member? <a href="register.php">Sign up</a>
    </div>
</form>
</body>
</html>