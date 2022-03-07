<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "connection.php";

    $qry_get_employee=mysqli_query($conn,"select * from employee where

    employee_id = '".$_GET['employee_id']."'");

    $dt_employee=mysqli_fetch_array($qry_get_employee);

    ?>

    <h3>update employee</h3>

    <form action="process_update_employee.php" method="post">

        <input type="hidden" name="employee_id" value=

  "<?=$dt_employee['employee_id']?>">

        name :

  <input type="text" name="employee_name" value=   "<?=$dt_employee['employee_name']?>" class="form-control">

        username :

  <input type="text" name="employee_username" value="<?=$dt_employee['employee_username']?>" class="form-control">

         password :

  <input type="password" name="employee_password" value="<?=$dt_employee['employee_password']?>" class="form-control">

        role :

        <select name="employee_role" class="form-control" >

            <option>select one</option>
            <option value = "admin">admin</option>
            <option value = "cashier">cashier</option>
            
        </select>         

        

<input type="submit" name="simpan" value="Confirm" class="btn btn-primary">

        

        

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>