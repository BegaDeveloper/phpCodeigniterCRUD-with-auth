<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

if(!$_SESSION['username']){
   redirect('login', 'refresh');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    #main-link {
        margin-left: 150px;
    }

    #list {
        margin: 0 100px 0 auto;
    }

    #sidebar {
        width: 400px;
        margin: 30px 0 0 100px;
    }
    </style>
</head>

<body>
    <?php $this->load->view('admin/inc/nav'); ?>
    <h1 class="text-center m-5">Hello <?php echo $_SESSION['username']; ?></h1>
<hr>
    <div class="row mx-auto">
        <div class="col-md-6 " id="sidebar">
            <?php $this->load->view('admin/inc/sidebar'); ?>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>

    <!---Bootstrap Script tag--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>