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
    <title>school management system  Edit Students</title>

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
                            <h3 class="box-title"> Edit Teachers Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="backend/teachers.php" method="post">
                            <div class="box-body">
                            <?php
                                 include 'includes/connect.php';
                                 $id = $_GET['Sid'];
                                 $sql="SELECT * FROM teachers WHERE id ='$id' ";
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
                                    <label for="exampleInputPassword1">Email</label>
                                     <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo $row['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">phone</label>
                                    <input type="int" name="phone" class="form-control" placeholder="Enter gender" value="<?php echo $row['phone'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="inter address" value="<?php echo $row['address'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Dob</label>
                                    <input type="date" name="dob" class="form-control" placeholder="inter number" value="<?php echo $row['dob'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gender</label>
                                    <input type="gender" name="gender" class="form-control" placeholder="inter gender">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label>
                                    <input type="text" name="department" class="form-control" placeholder="inter department" value="<?php echo $row['department'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Salary</label>
                                    <input type="text" name="salary" class="form-control" placeholder="inter salary" value="<?php echo $row['salary'];?>">>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date</label>
                                    <input type="date" name="date" class="form-control"  value="<?php echo $row['date'];?>">
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
    <!-- Welcome To dashboard: mr. <?php echo $_SESSION['TID']; ?> <a href="includes/logout.php">Logout</a> -->

</body>

</html>