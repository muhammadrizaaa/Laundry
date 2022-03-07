<?php

if($_POST){

    $id=$_POST['employee_id'];

    $name=$_POST['employee_name'];

    $username=$_POST['employee_username'];

    $password=$_POST['employee_password'];

    $role=$_POST['employee_role'];

    

    if(empty($name)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_employee.php';</script>";
    }
    elseif(empty($username)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_employee.php';</script>";
    }
    elseif(empty($password)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_employee.php';</script>";
    }
    elseif(empty($role)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_employee.php';</script>";
    }
    
    else {

        include "connection.php";

            $update=mysqli_query($conn,"update employee set employee_name='".$name."',employee_username='".$username."', employee_password='".$password."', employee_role='".$role."'where employee_id ='".$id."' ") ;

            if($update){

                echo "<script>alert('update succeed');location.href='home_database.php';</script>";

            } else {

                echo "<script>alert('failed to update');location.href='update_employee.php?employee_id=".$id."';</script>";

            }

        }
    }


?>