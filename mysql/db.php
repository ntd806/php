<?php
include 'connection.php';
$conn = OpenCon("localhost", "root", "", "wordpress");
echo "Connected Successfully";
CloseCon($conn);
?>