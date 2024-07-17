<?php
include '../includes/connect.php';
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];
    $sql ="INSERT INTO teachers (name,email,phone,address,dob,gender,department,salary,date) VALUES('$name','$email','$phone','$address','$dob','$gender','$department','$salary','$date')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../manageteachers.php';</script>";
    }
}
// dalete
if (isset($_GET['Sid'])) {
    $id = $_GET['Sid'];
    $del = "DELETE FROM teachers WHERE id='$id'";
    $q = mysqli_query($conn, $del);
    if ($q) {
        echo "<script>alert('Successfully Deleted'); location='../manageteachers.php';</script>";
    } else {
        echo "error" . mysqli_error($conn);
    }
}
//update
if (isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];
    $id= $_POST['ID'];
$sql = "UPDATE teachers SET name='$name', email='$email', phone='$phone',address='$address',dob='$dob',
 gender='$gender',department='$department',salary='$salary',date='$date'  where id='$id'";

$q = mysqli_query($conn, $sql);
if ($q) {
    echo "<script>alert('successfully Updated'); location='../manageteachers.php';</script>";
} else {
    echo "error".mysqli_error($conn);
}
}