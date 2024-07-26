<?php
include '../includes/connect.php';
//save
if (isset($_POST['btnSave'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $role = $_POST['role'];
    $date = $_POST['date'];

    $sql = "INSERT INTO parents (name,email,password,role,date) VALUES('$name','$email','$password','$role','$date')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../viewParents.php';</script>";
    }
}
//delete
if (isset($_GET['Pid'])) {
    $id = $_GET['Pid'];
    $del = "DELETE FROM parents WHERE id='$id'";
    $q = mysqli_query($conn, $del);
    if ($q) {
        echo "<script>alert('Successfully Deleted'); location='../viewParents.php';</script>";
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
        $date = $_POST['date'];
        $id= $_POST['Pid'];
    $sql = "UPDATE parents SET name='$name', email='$email', password='$password',role='$role',
     date='$date' where id='$id'";
   
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('successfully Updated'); location='../viewParents.php';</script>";
    } else {
        echo "error".mysqli_error($conn);
    }
}
