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
    <title>List of employees</title>
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
    a{
        text-decoration: none;
        color: snow;
    }

   
    </style>
</head>

<body>
    <?php $this->load->view('admin/inc/nav'); ?>
    <h1 class="text-center m-5">List of employees</h1>
    <hr>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Salary</th>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php
      $emp_list = $this->db->get('employees');
      foreach($emp_list->result() as $emp){

      
      ?>
                <tr>
                    <th scope="row"><?php echo $emp->id ?></th>
                    <th><?php echo $emp->f_name ?> </th>
                    <td><?php echo $emp->l_name ?></td>
                    <td><?php echo $emp->position ?></td>
                    <td><?php echo $emp->salary ?></td>
                    <td><button  id="a_b" class="btn btn-info form-control"><a href="<?php echo site_url(); ?>/aplication/update_emp/<?php echo $emp->id; ?>">Edit</a></button></td>
                    <td><button class="btn btn-danger form-control"><a href="<?php echo site_url(); ?>aplication/delete_job/<?php echo $emp->id; ?>">Delete</a></button></td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
    </div>
    <!---Bootstrap Script tag--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>