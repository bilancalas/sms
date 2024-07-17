<?php
include '../includes/connect.php';
//save
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $status = $_POST['status'];
    $role = $_POST['role'];
    $date = $_POST['date'];

    $sql = "INSERT INTO users (name,email,password,status,role,date) VALUES('$name','$email','$password','$status','$role','$date')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../manageusers.php';</script>";
    }
}
//delete
if (isset($_GET['Uid'])) {
    $id = $_GET['Uid'];
    $del = "DELETE FROM users WHERE id='$id'";
    $q = mysqli_query($conn, $del);
    if ($q) {
        echo "<script>alert('Successfully Deleted'); location='../manageusers.php';</script>";
    } else {
        echo "error" . mysqli_error($conn);
    }
}
//update
if (isset($_POST['btnUpdate'])) {
   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $role = $_POST['role'];
        $status = $_POST['status'];
        $date = $_POST['date'];
        $id= $_POST['ID'];
    $sql = "UPDATE users SET name='$name', email='$email', password='$password',status='$status',role='$role',
     date='$date' where id='$id'";
   
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('successfully Updated'); location='../manageusers.php';</script>";
    } else {
        echo "error".mysqli_error($conn);
    }
}
