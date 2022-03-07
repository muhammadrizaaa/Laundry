<?php
include "header.php";

include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>add member</title>

</head>
<body>
    <h2> add member </h2>
    <form action="process_add_member.php" method="post">

        name : 

        <input type="text" name="member_name" value="" class="form-control">
        <br>
        
        address : 

        <textarea name="member_address" class="form-control" rows="3"></textarea>
        <br>

        gender : 

        <select name="member_gender" class="form-control">
            <option></option>
            <option value = "L">male</option>
            <option value = "P">female</option>
        </select>

        <br>

        phone number :

        <input type="number" name="member_phone" value="" class="form-control">
        
        <br>
        <br>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-success">

    </form>

</body>
</html>