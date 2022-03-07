<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "connection.php";

    $qry_get_transaction=mysqli_query($conn,"select * from transaction where

    transaction_id = '".$_GET['transaction_id']."'");

    $dt_transaction=mysqli_fetch_array($qry_get_transaction);

    ?>

    <h3>update transaction</h3>

    <form action="process_update_transaction.php" method="post">

        <input type="hidden" name="transaction_id" value= "<?=$dt_transaction['transaction_id']?>">

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

    <input type="date" name="date_" value = "<?=$dt_transaction['date_']?>"  class="form-control">
    <br>

    pick-up date :
    <input type="date" name="pickup_date" value = "<?=$dt_transaction['pickup_date']?>"  class="form-control">

    <br>

    pay date : 

    <input type="date" name="pay_date"  value = "<?=$dt_transaction['pay_date']?>" class="form-control"> 

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

        

<input type="submit" name="simpan" value="Confirm" class="btn btn-primary">

        

        

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>