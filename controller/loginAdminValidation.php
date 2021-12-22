<?php
include '../../util/connectDB.php';
$statement = $conn->prepare("select * from admin where username='$username'");
$statement->execute();
$user = $statement->fetch();

