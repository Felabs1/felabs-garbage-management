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
        <form action="" id="frmdisposals">
            <h4>Disposal</h4>
            <label for="">Name of Disposer</label>
            <input type="text" name="disposal_name" class="w3-input w3-border" id="disposal_name">
            <label for="">Contact of disposer</label>
            <input type="text" name="disposal_contact" class="w3-input w3-border" id="disposal_contact">
            <label for="">Weight</label>
            <input type="number" name="disposal_weight" class="w3-input w3-border" id="disposal_weight">
            <label for="">Date Disposed</label>
            <input type="date" name="disposal_date" class="w3-input w3-border" id="disposal_date">
            <label for="">Assigned Location</label>
            <input type="text" name="disposal_location" class="w3-input w3-border" id="disposal_location">
            <button class="w3-button w3-border w3-grey">Confirm Add</button>
        </form>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>