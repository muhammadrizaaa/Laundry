<?php

if($_POST){

    $id=$_POST['transaction_id'];

    $member=$_POST['member_id'];

    $date=$_POST['date_'];

    $pickup_date=$_POST['pickup_date'];

    $pay_date=$_POST['pay_date'];

    $laundry_status=$_POST['laundry_status'];

    $paid=$_POST['paid'];

    $employee=$_POST['employee_id'];

    

    if(empty($member)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }
    elseif(empty($date)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }
    elseif(empty($pickup_date)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }
    elseif(empty($pay_date)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }
    elseif(empty($laundry_status)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }
    elseif(empty($paid)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }
    elseif(empty($employee)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_transaction.php';</script>";
    }   
    
    
    else {

        include "connection.php";

            $update=mysqli_query($conn,"update transaction set member_id='".$member."',date_='".$date."', pickup_date='".$pickup_date."', pay_date='".$pay_date."', laundry_status'".$laundry_status."', paid'".$paid."', employee_id'".$employee."'where transaction_id ='".$id."' ") ;

            if($update){

                echo "<script>alert('update succesed');location.href='home_database.php';</script>";

            } else {

                echo "<script>alert('failed to update');location.href='update_transaction.php?transaction_id=".$id."';</script>";

            }

        }
    }


?>