<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "connection.php";

    $qry_get_transaction_detail=mysqli_query($conn,"select * from transaction_detail where

    transaction_detail_id = '".$_GET['transaction_detail_id']."'");

    $dt_transaction_detail=mysqli_fetch_array($qry_get_transaction_detail);

    ?>

    <h3>update transaction detail</h3>

    <form action="process_update_transaction_detail.php" method="post">

        <input type="hidden" name="transaction_detail_id" value=

  "<?=$dt_transaction_detail['transaction_detail_id']?>">


        transaction : 

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
        
                packet : 

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

        <input type="number" name="quantity" value=   "<?=$dt_transaction_detail['quantity']?>" class="form-control">




        

<input type="submit" name="simpan" value="Confirm" class="btn btn-primary">

        

        

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>