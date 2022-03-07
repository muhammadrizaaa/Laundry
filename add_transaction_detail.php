<?php
include "header.php";

include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>add transaction detail</title>

</head>
<body>
    <h2> add transaction detail</h2>
    <form action="process_add_transaction_detail.php" method="post">

        transaction id : 

        <select name="transaction_id" class="form-control">
        <option></option>
        <?php 

                    include "connection.php";

                    $qry_transaction=mysqli_query($conn,"select * from transaction");

                while($data_transaction=mysqli_fetch_array($qry_transaction)){
                
                echo '<option value="'.$data_transaction['transaction_id'].'">'.$data_transaction['transaction_id'].'-'.$data_transaction['member_id'].'</option>';   

                }

                ?>

                </select>
        

        packet id : 

        <select name="packet_id" class="form-control">
        <option></option>
        <?php 

                    include "connection.php";

                    $qry_packet=mysqli_query($conn,"select * from packet");

                while($data_packet=mysqli_fetch_array($qry_packet)){
                
                echo '<option value="'.$data_packet['packet_id'].'">'.$data_packet['packet_id'].'-'.$data_packet['packet_type'].'</option>';   

                }

                ?>

                </select>

        quantity : 
        <input type = "number" name = "quantity" value ="" class = "form-control">
            
        <br>
        <br>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-success">

    </form>

</body>
</html>