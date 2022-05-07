<?php

require "./front_connection.php"


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
    <div class="w3-auto">
        <div class="w3-row-padding w3-stretch">
            <div class="w3-col m3">
                <div class="w3-card w3-padding w3-white">
                    <h6>Amount Collected</h6>
                    <h3>SH <?php echo
                            number_format($crud->fetch_data("SELECT SUM(total) AS total FROM payments")[0]["total"], 2);
                            ?></h3>
                </div>
            </div>
            <div class="w3-col m3">
                <div class="w3-card w3-padding w3-white">
                    <h6>Weight Collected</h6>
                    <h3><?php echo number_format($crud->fetch_data("SELECT SUM(garbage_weight) AS totalWeight FROM payments")[0]["totalWeight"], 0); ?> Kg</h3>
                </div>
            </div>
            <div class="w3-col m3">
                <div class="w3-card w3-padding w3-white">
                    <h6>Total customers</h6>
                    <h3><?php echo count($crud->fetch_data("SELECT * FROM customers")); ?></h3>
                </div>
            </div>
            <div class="w3-col m3">
                <div class="w3-card w3-padding w3-white">
                    <h6>Amount Disposed</h6>
                    <h3><?php echo number_format($crud->fetch_data("SELECT SUM(weight) AS totalWeight FROM disposal")[0]["totalWeight"]); ?> Kg</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="w3-row-padding w3-stretch">
            <div class="w3-col m6">
                <ul class="w3-ul w3-card">
                    <li class="w3-light-grey">Frequent Customers</li>
                    <div style="overflow-y: auto; height: 250px;"></div>
                </ul>
            </div>

        </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>