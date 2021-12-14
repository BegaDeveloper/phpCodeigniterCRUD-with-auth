<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

?>

<div class="container">
    <h1 class="text-center mt-5 mb-3">Hello, please register</h1>
    <div class="col-md-6">
        <div class="form-div m-5">
        <?php echo form_open('home/register_process'); ?>
        <h5>Fill the credentials</h5>
        <div class="form-group mb-2">
            <input type="text" id="inpt" name="full_name" class="form-control" placeholder="Full name" required>
        </div>
        <div class="form-group mb-2">
            <input type="text" id="inpt" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group mb-2">
            <input type="email" id="inpt" name="e_mail" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group mb-2">
            <input type="password" id="inpt" name="pass_word" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="submit" id="btn" name="reg" class="btn btn-success" value="Register" required>
            <a href="<?php echo site_url('home/login'); ?>" class="btn btn-primary">Login</a>
        </div>
        </div>

    </div>
</div>