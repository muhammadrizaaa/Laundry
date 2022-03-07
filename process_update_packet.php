<?php

if($_POST){

    $id=$_POST['packet_id'];

    $type=$_POST['packet_type'];

    $price=$_POST['price'];

    

    

    if(empty($type)){
        echo "<script>alert('packet type');location.href='update_packet.php?packet_id';</script>";
    }
    elseif(empty($price)){
        echo "<script>alert('price');location.href='update_packet.php?packet_id';</script>";
    }
   
    else {

        include "connection.php";

            $update=mysqli_query($conn,"update packet set packet_type='".$type."', price='".$price."'where packet_id='".$id."' ") ;
            echo "test";

            if($update){

                echo "<script>alert('update succeed');location.href='home_database.php';</script>";
          

            } else {

                echo "<script>alert('update failed');location.href='update_packet.php?packet_id'=".$id."';</script>";
              

            }

        }
    }


?>