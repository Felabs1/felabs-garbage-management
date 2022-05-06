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
