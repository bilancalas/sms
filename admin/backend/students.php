<?php
include '../includes/connect.php';
//save
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
//delete
if (isset($_GET['Sid'])) {
    $id = $_GET['Sid'];
    $del = "DELETE FROM students WHERE id='$id'";
    $q = mysqli_query($conn, $del);
    if ($q) {
        echo "<script>alert('Successfully Deleted'); location='../managestudents.php';</script>";
    } else {
        echo "error" . mysqli_error($conn);
    }
}
//update
if (isset($_POST['btnUpdate'])) {
   
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
        $id= $_POST['ID'];
    $sql = "UPDATE students SET name='$name', gender='$gender', class='$class',role='$role',phone='$phone',
     parent='$parent',number='$number',city='$city',address='$address', age='$age' where id= '$id' ";
   
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('successfully Updated'); location='../managestudents.php';</script>";
    } else {
        echo "error".mysqli_error($conn);
    }
}