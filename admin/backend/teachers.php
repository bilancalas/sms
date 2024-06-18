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
    $date = $_POST['date']
    $sql = "INSERT INTO teachers(name,email,phone,address,dob,gender,department,salary,date) VALUES('$name','$email','$phone','$address','$dob','$gender','$department','$salary','$date')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../manageStudent.php';</script>";
    }
}
