<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Hello, please log in</h1>
        <div class="main-div m-5">
            <div class="col-md-6">
                <?php echo form_open('home/login_process'); ?>
                <h5>Login</h5>
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group mb-2">
                    <input type="password" class="form-control" name="pass_word" placeholder="Password" required>
                </div>
                <div class="form-group mb-2">
                    <input type="submit" id="btn" name="log_in" class="btn btn-success" value="Login">
                    <a href="<?php echo site_url('home'); ?>" class="btn btn-primary">Register</a>
                </div>
            </div>


        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>