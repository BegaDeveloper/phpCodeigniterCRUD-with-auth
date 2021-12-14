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
    <title>Add Information</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    #main-link {
        margin-left: 150px;
    }

    #list {
        margin: 0 130px 0 auto;
    }

    .main-panel {
        width: 340px;
    }

    #inpt{
        width: 400px;
    }

    #sidebar {
        width: 400px;
        margin: 30px 0 0 100px;
    }
    
 
    .main-div{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    </style>
</head>

<body>
    <!--Navbar-->
    <?php $this->load->view('admin/inc/nav'); ?>
     <h1 class="text-center m-5">Employee sign up</h1>
     <hr>
    <div class="row mx-auto">
        <div class="col-md-6 " id="sidebar">
            <?php $this->load->view('admin/inc/sidebar'); ?>
        </div>
        <div class="col-md-6" id="second-div">
            <div class="main-div mt-5">
                <?php echo form_open('aplication/fill_details'); ?>
                <h5 class="mb-3">Enter Details: </h5>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="f_name" class="form-control" placeholder="First name: " required>
                </div>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="l_name" class="form-control" placeholder="Last name: " required>
                </div>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="position" class="form-control" placeholder="Job position: " required>
                </div>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="salary" class="form-control" placeholder="Expected salary; " required>
                </div>
                <div class="form-group">
                    <input type="submit" id="inpt" class="btn btn-success" name="add_ap" value="Add user">
                </div>
            </div>

        </div>
    </div>

    <!---Bootstrap Script tag--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>