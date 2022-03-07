<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "connection.php";

    $qry_get_member=mysqli_query($conn,"select * from member where

    member_id = '".$_GET['member_id']."'");

    $dt_member=mysqli_fetch_array($qry_get_member);

    ?>

    <h3>Ubah Pelanggan</h3>

    <form action="process_update_member.php" method="post">

        <input type="hidden" name="member_id" value=

  "<?=$dt_member['member_id']?>">

        member name :

  <input type="text" name="member_name" value=   "<?=$dt_member['member_name']?>" class="form-control">

        member address :

  <input type="text" name="member_address" value="<?=$dt_member['member_address']?>" class="form-control">

        gender :

        <select name="member_gender" class="form-control" >

            <option>select one</option>
            <option value = "L">male</option>
            <option value = "P">female</option>
            
        </select>         

        telp :

  <input type="number" name="member_phone" value=   "<?=$dt_member['member_phone']?>" class="form-control">        


        

<input type="submit" name="simpan" value="Confirm" class="btn btn-primary">

        

        

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>