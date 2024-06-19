<?php
session_start();
if (!$_SESSION['SID']) {
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management system  New Students</title>

</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php
        include 'includes/aside.php';

        ?>
        <aside class="right-side">




            <!-- Main content -->
            <section class="content">


                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"> Edit Students Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="backend/students.php" method="post">
                            <div class="box-body">
                            <?php
                                 include 'includes/connect.php';
                                 $id = $_GET['Sid'];
                                 $sql="SELECT * FROM students WHERE id ='$id' ";
                                 $q=mysqli_query($conn, $sql);
                                 if($q-> num_rows > 0){
                                 $row=mysqli_fetch_assoc($q);
                                 }

                                     ?>

                                <div class="form-group">
                                <input type="hidden" name="ID" class="form-control" value="<?php echo $row['id'];?>" readonly>
                                    <label for="exampleInputEmail1">Full name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter fullname" value="<?php echo $row['name'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select class="form-control" name="role" value="<?php echo $row['role'];?>">
                                        <option>--Select user role</option>
                                        <option>Administrator</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">gender</label>
                                    <input type="gender" name="gender" class="form-control" placeholder="Enter gender" value="<?php echo $row['gender'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">class</label>
                                    <input type="text" name="class" class="form-control" placeholder="inter class" value="<?php echo $row['class'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="inter number" value="<?php echo $row['phone'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">parent</label>
                                    <input type="text" name="parent" class="form-control" placeholder="inter parent" value="<?php echo $row['parent'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">number</label>
                                    <input type="text" name="number" class="form-control" placeholder="inter number" value="<?php echo $row['number'];?>">>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">city</label>
                                    <input type="text" name="city" class="form-control" placeholder="inter city" value="<?php echo $row['city'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">address</label>
                                    <input type="text" name="address" class="form-control" placeholder="inter address" value="<?php echo $row['address'];?>">>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">age</label>
                                    <input type="text" name="age" class="form-control" placeholder="inter age" value="<?php echo $row['age'];?>">>
                                </div>



                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name="btnUpdate" class="btn btn-primary">update</button>
                            </div>
                        </form>
                    </div>
                </div>



            </section><!-- /.content -->
        </aside>
    </div>
    <!-- Welcome To dashboard: mr. <?php echo $_SESSION['SID']; ?> <a href="includes/logout.php">Logout</a> -->

</body>

</html>