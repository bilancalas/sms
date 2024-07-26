<?php
session_destroy();
$_SESSION['SID'];
header('location: ../../');
