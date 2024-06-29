<?php
session_start();
if (!$_SESSION['SID']) {
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>school Management system</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->

</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php
        include 'includes/aside.php';

        ?>
        <aside class="right-side">


            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Teachers List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Dob</th>
                                            <th>Gender</th>
                                            <th>Department</th>
                                            <th>salary</th>
                                            <th>Date</th>
                                            <th>Actions</th>

                                        </tr>
                                    <tbody>


                                        <?php

                                        include 'includes/connect.php';
                                        $sql = "SELECT * FROM teachers";
                                        $r = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($r)) {


                                        ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                <td><?php echo $row['department']; ?></td>
                                                <td><?php echo $row['salary']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                               

                                            
       <td>

    <a href="editTeachers.php?Sid=<?php echo $row['id']; ?>">

        <button class="btn btn-info fa fa- edit">Edit</button>

    </a>
    <a href="backend/teachers.php?Sid=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">
        <button class="btn btn-danger fa fa-trash-o"></button>
    </a>
<?php
} ?>
</td>
</tr>
                                        <?php     
                                        ?>
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->



</body>

</html>