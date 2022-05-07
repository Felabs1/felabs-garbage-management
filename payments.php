<?php

require "front_connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIHIGA GARBAGE</title>

    <link rel="stylesheet" type="text/css" href="./css/w3.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>
    <?php require "./navigation.php"; ?>
    <br>
    <div class="w3-auto w3-border w3-padding" style="width: 35rem">
        <form action="" id="frmcustomers">
            <h4>Payments</h4>
            <label for="">Name</label>
            <!-- <input type="text" name="customer_name" class="w3-input w3-border" id="customer_name">
         -->
            <select name="customer_name" id="customer_name" class="w3-select w3-border">
                <option value="" selected>Select Customer</option>
                <?php

                $fetch = $crud->fetch_data("SELECT * FROM customers WHERE payment_status = 'not_paid'");
                foreach ($fetch as $row) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php
                }

                ?>
            </select>
            <label for="">Garbage Weight Collected</label>
            <input type="number" onkeyup="calculateTotal()" name="garbage_weight" class="w3-input w3-border" id="garbage_weight">
            <label for="">Unit Price (Ksh 2000 per kg)</label>
            <input type="number" onkeyup="calculateTotal()" value="2000" name="unit_price" class="w3-input w3-border" id="unit_price"><br />
            <label for="">Date</label>
            <input type="date" name="date_transacted" class="w3-input w3-border" id="date_transacted"><br />
            <label for="">total</label>
            <input type="number" name="total" class="w3-input w3-border" id="total">
            <button type="button" onclick="makePayments()" class="w3-button w3-border w3-grey">Confirm Add</button>
        </form>
    </div>
    <br>
    <div class="w3-auto">
        <table class="w3-table w3-border w3-round">
            <tr>
                <th>#</th>
                <th>Cust Name</th>
                <th>Weight</th>
                <th>Unit Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php
            $fetch = $crud->fetch_data("SELECT * FROM payments");
            foreach ($fetch as $row) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['cust_id']; ?></td>
                    <td><?php echo number_format($row['garbage_weight'], 2); ?></td>
                    <td><?php echo number_format($row['unit_price'], 2); ?></td>
                    <td><?php echo number_format($row['total'], 2); ?></td>
                    <td><button class="w3-button w3-grey w3-round">Edit</button>&nbsp;<button class="w3-button w3-border w3-round">Delete</button></td>
                </tr>
            <?php
            }

            ?>
        </table>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>