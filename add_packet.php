<?php
include "header.php";

include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>add packet</title>

</head>
<body>
    <h2> add packet </h2>
    <form action="process_add_packet.php" method="post">


        laundry type : 

        <select name="packet_type" class="form-control">
            <option> Select One  </option>
            <option value = "kg">kg</option>
            <option value = "blanket">blanket</option>
            <option value = "bed_covers">cover bed</option>
            <option value = "shirt">shirt</option>
        </select>
        
        price : 

        <input type="number" name="price" value="" class="form-control">

        <br>
        <br>

        <input type="submit" name="simpan" value="Confirm" class="btn btn-success">

    </form>

</body>
</html>