<?php 

    if($_POST){

        $username=$_POST['employee_username'];

        $password=$_POST['employee_password'];
        

        if(empty($username)){

            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";

        } elseif(empty($password)){

            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";

        } else {

            include "connection.php";

            $qry_login=mysqli_query($conn,"select * from employee where employee_username = '".$username."' and employee_password = '".($password)."'");

            if(mysqli_num_rows($qry_login)>0){

                $dt_login=mysqli_fetch_array($qry_login);

                session_start();

                $_SESSION['employee_id']=$dt_login['employee_id'];

                $_SESSION['employee_name']=$dt_login['employee_name'];

                $_SESSION['employee_username']=$dt_login['employee_username'];

                $_SESSION['employee_password']=$dt_login['employee_password'];

                $_SESSION['employee_role']=$dt_login['employee_role'];

                $_SESSION['status_login']=true;

                header("location: home.php");

            } else {

                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";

            }

        }

    }

?>