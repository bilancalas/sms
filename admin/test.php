<?php
include '../includes/connect.php';
//save
if (isset($_POST['btnSave'])) {
    $amount = $_POST['amount'];
    $code = $_POST['code'];
    $date = $_POST['date'];
    $sql = "INSERT INTO budgets (amount,code,date) VALUES('$amount','$code','$date')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../manageBudgets.php';</script>";
    }
}
//delete

