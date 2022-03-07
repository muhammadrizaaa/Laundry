<?php

if($_POST){

    $id=$_POST['transaction_detail_id'];

    $transaction=$_POST['transaction_id'];

    $packet=$_POST['packet_id'];
    
    $qty=$_POST['quantity'];

    

    

    if(empty($transaction)){
        echo "<script>alert('transaction');location.href='update_transaction_detail.php?transaction_detail_id';</script>";
    }
    elseif(empty($packet)){
        echo "<script>alert('packet');location.href='update_transaction_detail.php?transaction_detail_id';</script>";
    }
    elseif(empty($qty)){
        echo "<script>alert('quantity');location.href='update_transaction_detail.php?transaction_detail_id';</script>";
    }
   
    else {

        include "connection.php";

            $update=mysqli_query($conn,"update transaction_detail set transaction_id='".$transaction."', packet_id='".$packet."', quantity='".$qty."'where transaction_detail_id='".$id."' ") ;
            echo "test";

            if($update){

                echo "<script>alert('update succeed');location.href='home_database.php';</script>";
          

            } else {

                echo "<script>alert('update failed');location.href='update_transaction_detail.php?transaction_detail_id'=".$id."';</script>";
              

            }

        }
    }


?>