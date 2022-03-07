<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "connection.php";

    $qry_get_packet=mysqli_query($conn,"select * from packet where

    packet_id = '".$_GET['packet_id']."'");

    $dt_packet=mysqli_fetch_array($qry_get_packet);

    ?>

    <h3>update packet</h3>

    <form action="process_update_packet.php" method="post">

        <input type="hidden" name="packet_id" value=

  "<?=$dt_packet['packet_id']?>">


        laundry type :

        <select name="packet_type" class="form-control" >

            <option>select one</option>
            <option value = "kg">kg</option>
            <option value = "blanket">blanket</option>
            <option value = "bed_covers">bed cover</option>
            <option value = "shirt">shirt</option>
            
        </select>        
        
            price :

        <input type="text" name="price" value=   "<?=$dt_packet['price']?>" class="form-control">




        

<input type="submit" name="simpan" value="Confirm" class="btn btn-primary">

        

        

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>