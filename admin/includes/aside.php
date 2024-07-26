<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!-- <img src="img/avatar3.png" class="img-circle" alt="User Image" /> -->
            </div>
            <div class="pull-left info">
                <p>Hello, <?php echo $_SESSION['SID']; ?> </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="dashboard.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>academics years</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> Add new </a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> View</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Administrative</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> New Budget</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Budget Management</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Newusers.php"><i class="fa fa-angle-double-right"></i> New users</a></li>
                    <li><a href="manageusers.php"><i class="fa fa-angle-double-right"></i> Manage Users</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-group"></i> <span>Students</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newStudent.php">
                        <i class="fa fa-angle-double-right"></i> New Students </a></li>
                    <li><a href="manageStudent.php"><i class="fa fa-angle-double-right"></i> Manage Students</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-floppy-o"></i> <span>Classes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newuser.php"><i class="fa fa-angle-double-right"></i> New Users</a></li>
                    <li><a href="manageusers.php"><i class="fa fa-angle-double-right"></i> Manage users</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Teachers</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="fromteachers.php"><i class="fa fa-angle-double-right"></i>Register Teachers</a></li>
                    <li><a href="manageteachers.php"><i class="fa fa-angle-double-right"></i> Manage teachers </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars"></i> <span>Parents</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="AddParents.php"><i class="fa fa-angle-double-right"></i> Add Parents</a></li>
                    <li><a href="viewParents.php"><i class="fa fa-angle-double-right"></i> View Parents</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-marker"></i> <span>Subjects</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newuser.php"><i class="fa fa-angle-double-right"></i> New Users</a></li>
                    <li><a href="manageusers.php"><i class="fa fa-angle-double-right"></i> Manage users</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Exams</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newuser.php"><i class="fa fa-angle-double-right"></i> New Users</a></li>
                    <li><a href="manageusers.php"><i class="fa fa-angle-double-right"></i> Manage users</a></li>
                </ul>
            </li>



            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-cog"></i> <span>settings</span>

                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>