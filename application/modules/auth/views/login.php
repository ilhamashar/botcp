
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $page_title; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('assets/templates/backend/'); ?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/templates/backend/'); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/templates/backend/'); ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/templates/backend/'); ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/templates/backend/'); ?>css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">BOT<b>Panel</b></a>
        <small>LINE Bot Control Panel</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" action="<?php echo base_url('auth/login'); ?>" method="POST">
                <?php if($this->session->flashdata('message')) echo "<p class=\"".$this->session->flashdata('class')."\">".$this->session->flashdata('message')."</p>"; ?>
                <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink" value="false">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                    </div>
                </div>
<!--                <div class="row m-t-15 m-b--20">-->
<!--                    <div class="col-xs-6">-->
<!--                        <a href="--><?php //echo site_url('auth/signup'); ?><!--">Register Now!</a>-->
<!--                    </div>-->
<!--                    <div class="col-xs-6 align-right">-->
<!--                        <a href="--><?php //echo site_url('auth/forgot'); ?><!--">Forgot Password?</a>-->
<!--                    </div>-->
<!--                </div>-->
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo base_url('assets/templates/backend/'); ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url('assets/templates/backend/'); ?>plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url('assets/templates/backend/'); ?>plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="<?php echo base_url('assets/templates/backend/'); ?>plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url('assets/templates/backend/'); ?>js/admin.js"></script>
<script src="<?php echo base_url('assets/templates/backend/'); ?>js/pages/examples/sign-in.js"></script>
</body>
</html>
