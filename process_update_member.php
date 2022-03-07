<?php

if($_POST){

    $id=$_POST['member_id'];

    $name=$_POST['member_name'];

    $address=$_POST['member_phone'];

    $gender=$_POST['member_gender'];

    $phone=$_POST['member_phone'];

    

    if(empty($name)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_member.php';</script>";
    }
    elseif(empty($address)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_member.php';</script>";
    }
    elseif(empty($address)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_member.php';</script>";
    }
    elseif(empty($gender)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_member.php';</script>";
    }
    elseif(empty($phone)){
        echo "<script>alert('nama tidak boleh kosong');location.href='update_member.php';</script>";
    }

    else {

        include "connection.php";

            $update=mysqli_query($conn,"update member set member_name='".$name."',member_address='".$address."', member_gender='".$gender."', member_phone='".$phone."'where member_id ='".$id."' ") ;

            if($update){

                echo "<script>alert('Sukses update siswa');location.href='home_database.php';</script>";

            } else {

                echo "<script>alert('Gagal update siswa');location.href='update_member.php?member_id=".$id."';</script>";

            }

        }
    }


?>