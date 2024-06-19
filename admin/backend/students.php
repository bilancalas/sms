<?php
include '../includes/connect.php';
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = ($_POST['class']);
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $parent = $_POST['parent'];
    $number = $_POST['number'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (name,gender,class,phone,parent,number,city,address,age,role) VALUES('$name','$gender','$class','$role','$phone','$parent','$number','$city','$address','$age')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../managestudents.php';</script>";
    }
}
