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
        <form action="" id="frmemployees">
            <h4>New Employee</h4>
            <label for="">Name</label>
            <input type="text" name="employee_name" class="w3-input w3-border" id="employee_name">
            <label for="">Username</label>
            <input type="text" name="employee_username" class="w3-input w3-border" id="employee_username">
            <label for="">password</label>
            <input type="text" name="employee_password" class="w3-input w3-border" id="employee_password">
            <label for="">Usertype</label>
            <select type="text" name="employee_usertype" class="w3-input w3-border" id="employee_usertype">
                <option value="admin">Admin</option>
                <option value="admin">User</option>
            </select>
            <label for="">Contact</label>
            <input type="text" name="employee_contact" class="w3-input w3-border" id="employee_contact"><br />
            <button type="button" onclick="addEmployee()" class="w3-button w3-border w3-grey">Confirm Add</button>
        </form>
    </div>
    <div class="w3-auto">
        <table class="w3-table w3-bordered">
            <tr>
                <th>#</th>
                <th>Employee name</th>
                <th>username</th>
                <th>usertype</th>
                <th>contact</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php

                $fetch = $crud->fetch_data("SELECT * FROM employee");
                foreach ($fetch as $row) {
                ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['usertype']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><button class="w3-button w3-grey w3-round">Edit</button>&nbsp;<button class="w3-button w3-border w3-round">Delete</button></td>
            </tr>
        <?php
                }


        ?>
        </tr>
        </table>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>