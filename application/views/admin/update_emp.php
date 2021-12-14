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
    <title>Update employee</title>
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
<!--Navbar-->
<?php $this->load->view('admin/inc/nav'); ?>
     <h1 class="text-center m-5">Edit details</h1>
     <hr>
    <div class="row mx-auto">
        <div class="col-md-6 " id="sidebar">
            <?php $this->load->view('admin/inc/sidebar'); ?>
        </div>
        <div class="col-md-6" id="second-div">
            <div class="main-div mt-5">     
                <?php // echo form_open('aplication/update_process/'.$id, 'class="form-horizontal" '); ?>
                <?php
                //$id = $this->uri->semgment(3);
               // $list = $this->db->get_where('employees', array('id' => $id));
               // foreach($list->result() as $emp){
                ?>
                <h5 class="mb-3">Update Details: </h5>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="f_name" class="form-control" value="<?php echo $emp->f_name; ?>" required>
                </div>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="l_name" class="form-control" value="<?php echo $emp->l_name; ?>" required>
                </div>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="position" class="form-control" value="<?php echo $emp->position; ?>" required>
                </div>
                <div class="form-group mb-2">
                    <input type="text" id="inpt" name="salary" class="form-control" value="<?php echo $emp->f_name; ?>" required>
                </div>
                <div class="form-group">
                    <input type="submit" id="inpt" class="btn btn-success" name="update_emp" value="Update">
                </div>
                <?php 
           // }
            ?>
            </div>

        </div>
    </div>


     <!---Bootstrap Script tag--->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>