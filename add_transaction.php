<?php
include "header.php";

include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>add transaction</title>

</head>
<body>
    <h2> add transaction </h2>
    <form action="process_add_transaction.php" method="post">

        member : 

        <select name="member_id" class="form-control">
        <option></option>
        <?php 

                     include "connection.php";

                      $qry_member=mysqli_query($conn,"select * from member");
 
                while($data_member=mysqli_fetch_array($qry_member)){
                
                echo '<option value="'.$data_member['member_id'].'">'.$data_member['member_id'].'-'.$data_member['member_name'].'</option>';   

                 }

                   ?>

                   </select>
        
        date : 

        <input type="date" name="date_"  class="form-control">
        <br>

        pick-up date :
        <input type="date" name="pickup_date"  class="form-control">

        <br>

        pay date : 

        <input type="date" name="pay_date"  class="form-control"> 
        
        laundry status : 

        <select name="laundry_status" class="form-control">
            <option> Select One  </option>
            <option value = "not_yet">not yet</option>
            <option value = "process">process</option>
            <option value = "done">done</option>
            <option value = "can_be_taken">can be taken</option>
        </select>

        paid : 

        <select name="paid" class="form-control">
            <option>choose</option>
            <option value ="paid">paid</option>
            <option value ="not_paid_yet">not paid yet</option>
        </select>

        employee : 

        <select name="employee_id" class="form-control">
        <option></option>
        <?php 

                    include "connection.php";

                    $qry_employee=mysqli_query($conn,"select * from employee");

                while($data_employee=mysqli_fetch_array($qry_employee)){
                
                echo '<option value="'.$data_employee['employee_id'].'">'.$data_employee['employee_id'].'-'.$data_employee['employee_name'].'</option>';   

                }

                ?>

                </select>
            
        <br>
        <br>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-success">

    </form>

</body>
</html>