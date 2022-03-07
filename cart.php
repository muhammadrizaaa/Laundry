<?php 
    session_start();
    include "header.php";

?>

<h2>Transaction_List</h2>

<table class="table table-hover striped">

    <thead>

        <tr>

            <th>NO</th><th>Packet Type</th><th>Total</th><th>Total Price</th><th>Action</th>

        </tr>

    </thead>

    <tbody>

        <?php

        foreach (@$_SESSION['cart'] as $key_packet => $val_packet): 
            $total=$val_packet['total'];
            ?>
            <tr>

                <td><?=($key_packet+1)?></td>
                <td><?=$val_packet['packet_type']?></td>
                <td><?=$val_packet['quantity']?></td>
                <td><?=$val_packet['total']?></td>
                <td><a href="delete_cart.php?packet_id=<?=$key_packet?>" class="btn btn-danger"><strong>Delete</strong></a></td>

            </tr>


        <?php endforeach ?>

    </tbody>

</table>

<a href="add_transaction.php" class="btn btn-success">Check Out</a>

