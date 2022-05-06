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
