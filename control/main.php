<?php

require "./crud.php";
$crud = new Crud("localhost", "root", "Felabs@6986", "garbage");

if (isset($_GET['new_customer'])) {
    $insert = $crud->insert_data("customers", [
        "name" => $_POST['customer_name'],
        "contact" => $_POST['customer_contact'],
        "residence" => $_POST['customer_residence']
    ]);
    if ($insert) {
        echo "success";
    }
}

if (isset($_GET['new_payment'])) {
    $insert = $crud->insert_data("payments", [
        "cust_id" => $_POST['customer_name'],
        "garbage_weight" => $_POST['garbage_weight'],
        "unit_price" => $_POST['unit_price'],
        "total" => $_POST['total'],
        "date_sold" => $_POST['date_transacted']
    ]);

    if ($insert) {
        echo "success";
    } else {
        echo $crud->conn->error;
    }
}


if (isset($_GET['new_employee'])) {
    $fetch = $crud->fetch_data("SELECT * FROM employee WHERE username = '" . $_POST['employee_username'] . "'");
    if (count($fetch) > 0) {
        echo "user_exist";
    } else {
        $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $insert = $crud->insert_data("employee", [
            "name" => $_POST["employee_name"],
            "username" => $_POST['employee_username'],
            "password" => $pass_hash,
            "usertype" => $_POST['employee_usertype'],
            "contact" => $_POST['employee_contact']
        ]);

        if ($insert) {
            echo "success";
        } else {
            echo $crud->conn->error;
        }
    }
}

if (isset($_GET['new_disposal'])) {
    $insert = $crud->insert_data("disposal", [
        "disposer_name" => $_POST['disposal_name'],
        "disposer_contact" => $_POST['disposal_contact'],
        "weight" => $_POST['disposal_weight'],
        "date_disposed" => $_POST['disposal_date'],
        "assigned_location" => $_POST['disposal_location']
    ]);

    if ($insert) {
        echo "success";
    } else {
        echo $crud->conn->error;
    }
}
