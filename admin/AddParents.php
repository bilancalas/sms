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
                            <h3 class="box-title">Parents Registration Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="backend/Students.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter fullname">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="inter email">
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="inter number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Students_ID</label>
                                    <input type="text" name="students_id" class="form-control" placeholder="Students_ID">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date</label>
                                    <input type="date" name="date" class="form-control" >
                                </div>



                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name="btnSave" class="btn btn-primary">Save</button>
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