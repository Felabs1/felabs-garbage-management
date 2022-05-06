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
            <input type="text" name="customer_name" class="w3-input w3-border" id="customer_name">
            <label for="">Garbage Weight Collected</label>
            <input type="number" name="customer_contact" class="w3-input w3-border" id="customer_contact">
            <label for="">Unit Price (Ksh 2000 per kg)</label>
            <input type="number" value="2000" name="customer_residence" class="w3-input w3-border" id="customer_residence"><br />
            <label for="">Date</label>
            <input type="date" name="customer_residence" class="w3-input w3-border" id="customer_residence"><br />
            <button class="w3-button w3-border w3-grey">Confirm Add</button>
        </form>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>