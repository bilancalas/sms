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
    <title>school management system  New teachers</title>

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
                            <h3 class="box-title">teachers Registration Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="backend/teachers.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter fullname">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">phone</label>
                                    <input type="int" name="phone" class="form-control" placeholder="inter number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">address</label>
                                    <input type="text" name="address" class="form-control" placeholder="inter address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">dob</label>
                                    <input type="date" name="dob" class="form-control" placeholder="inter dob">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">department</label>
                                    <input type="text" name="department" class="form-control" placeholder="inter department">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">salary</label>
                                    <input type="int" name="salary" class="form-control" placeholder="inter salary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">date</label>
                                    <input type="date" name="date" class="form-control" placeholder="inter date">
                                



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