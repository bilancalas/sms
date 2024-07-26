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
                            <h3 class="box-title">Students Registration Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="backend/Students.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter fullname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select class="form-control" name="role">
                                        <option>--Select user role</option>
                                        <option>Administrator</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">gender</label>
                                    <input type="gender" name="gender" class="form-control" placeholder="Enter gender">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">class</label>
                                    <select class="form-control" name="role">
                                        <option>--Select class</option>
                                        <option>class 12</option>
                                        <option>class 11</option>
                                        <option>class 10</option>
                                        <option>class 9</option>
                                        <option>class 8</option>
                                        <option>class 7</option>
                                        <option>class 6</option>
                                        <option>class 5</option>
                                        <option>class 4</option>
                                        <option>class 3</option>
                                        <option>class 2</option>
                                        <option>class 1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="inter number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">parent</label>
                                    <input type="text" name="parent" class="form-control" placeholder="inter parent">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">number</label>
                                    <input type="text" name="number" class="form-control" placeholder="inter number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">city</label>
                                    <input type="text" name="city" class="form-control" placeholder="inter city">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">address</label>
                                    <input type="text" name="address" class="form-control" placeholder="inter address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">age</label>
                                    <input type="text" name="age" class="form-control" placeholder="inter age">
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