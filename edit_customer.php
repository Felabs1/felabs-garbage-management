<?php

require "./front_connection.php";
if (!isset($_GET['id'])) {
    header("location: ./customer.php");
}

$fetch = $crud->fetch_data("SELECT * FROM customers WHERE id = '" . $_GET['id'] . "'");
$e_row = $fetch[0];
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
            <h4>New Customer</h4>
            <label for="">Name</label>
            <input type="text" value="<?php echo $e_row["name"]; ?>" name="customer_name" class="w3-input w3-border" id="customer_name">
            <label for="">Contact</label>
            <input type="text" name="customer_contact" value="<?php echo $e_row["contact"]; ?>" class="w3-input w3-border" id="customer_contact">
            <label for="">Residence</label>
            <input type="text" name="customer_residence" value="<?php echo $e_row["residence"]; ?>" class="w3-input w3-border" id="customer_residence"><br />
            <button type="button" class="w3-button w3-border w3-grey" onclick="updateCustomer(<?php echo $e_row['id']; ?>)">Update</button>
        </form>
    </div><br>
    <div class="w3-auto">
        <table class="w3-table w3-border w3-round">
            <?php
            $fetch = $crud->fetch_data("SELECT * FROM customers");
            ?>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Residence</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($fetch as $row) {
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['residence']; ?></td>
                    <td><button class="w3-button w3-grey w3-round" onclick="window.location.href = './edit_customer.php?id=<?php echo $row['id']; ?>'">edit</button>&nbsp;<button class="w3-button w3-border w3-round">Delete</button></td>
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