<?php
include "header.php";

include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>add employee</title>

</head>
<body>
    <h2> add employee </h2>
    <form action="process_add_employee.php" method="post">

        name : 

        <input type="text" name="employee_name" value="" class="form-control">
        <br>
        
        username : 

        <input type="text" name="employee_username" value="" class="form-control">
        <br>

        password :
        <input type="password" name="employee_password" value="" class="form-control">

        <br>

        role : 

        <select name="employee_role" class="form-control">
            <option> Select One  </option>
            <option value = "admin">admin</option>
            <option value = "cashier">cashier</option>
        </select>
        
        <br>
        <br>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-success">

    </form>

</body>
</html>