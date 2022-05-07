const registerCustomer = () => {
  let name = $("#customer_name");
  let contact = $("#customer_contact");
  let residence = $("#customer_residence");

  if (name.val() === "" || contact.val() === "" || residence.val() === "") {
    alert("please fill in all the data");
    return;
  }

  $.ajax({
    url: "./control/main.php?new_customer=true",
    method: "post",
    data: $("#frmcustomers").serialize(),
    success: function (data) {
      if (data === "success") {
        alert("customer registered succesfully");
        window.location.href = "./customer.php";
      } else {
        alert("internal server error");
        console.error(data);
      }
    },
  });
};

const makePayments = () => {
  let customer_name = $("#customer_name");
  let unit_price = $("#unit_price");
  let date_transacted = $("#date_transacted");
  let garbage_weight = $("#garbage_weight");

  if (
    customer_name.val() === "" ||
    unit_price.val() === "" ||
    date_transacted.val() === "" ||
    garbage_weight.val() === ""
  ) {
    alert("please fill in all the details");
    return;
  }
  $.ajax({
    url: "./control/main.php?new_payment=true",
    method: "post",
    data: $("#frmcustomers").serialize(),
    success: function (data) {
      if (data === "success") {
        alert("customer registered succesfully");
        window.location.href = "./payments.php";
      } else {
        alert("internal server error");
        console.error(data);
      }
    },
  });
};

const calculateTotal = () => {
  let unit_price = $("#unit_price");
  let garbage_weight = $("#garbage_weight");
  let result = 0;

  if (unit_price.val() === "" || garbage_weight.val() === "") {
    $("#total").val(result);
  } else {
    result = unit_price.val() * garbage_weight.val();
    $("#total").val(result);
  }
};

const addEmployee = () => {
  let employeeName = $("#employee_name");
  let employeeUsername = $("#employee_username");
  let employeePassword = $("#employee_password");
  let employeeUsertype = $("#employee_usertype");
  let employeeContact = $("#employee_contact");

  if (
    employeeName.val() === "" ||
    employeeUsername.val() === "" ||
    employeePassword.val() === "" ||
    employeeUsertype.val() === "" ||
    employeeContact.val() === ""
  ) {
    alert("please fill in all the forms");
    return;
  }

  $.ajax({
    url: "./control/main.php?new_employee=true",
    method: "post",
    data: $("#frmemployees").serialize(),
    success: function (data) {
      if (data === "success") {
        alert("customer registered succesfully");
        window.location.href = "./employee.php";
      } else if (data == "user_exist") {
        alert("the user allready exists");
      } else {
        alert("internal server error");
        console.error(data);
      }
    },
  });
};

const disposeGarbage = () => {
  let disposerName = $("#disposal_name");
  let disposerContact = $("#disposal_contact");
  let disposalWeight = $("#disposal_weight");
  let disposalDate = $("#disposal_date");
  let disposalLocation = $("#disposal_location");

  if (
    disposerName.val() === "" ||
    disposerContact.val() === "" ||
    disposalWeight.val() === "" ||
    disposalDate.val() === "" ||
    disposalLocation.val() === ""
  ) {
    alert("please fill in all the details");
    return;
  }

  $.ajax({
    url: "./control/main.php?new_disposal=true",
    method: "post",
    data: $("#frmdisposals").serialize(),
    success: function (data) {
      if (data === "success") {
        alert("customer registered succesfully");
        window.location.href = "./disposal.php";
      } else {
        alert("internal server error");
        console.error(data);
      }
    },
  });
};
