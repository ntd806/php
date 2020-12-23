<?php
/**
 * Openning connection to mysql
 */
function OpenCon($dbhost, $dbuser, $dbpass, $db) {
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
}

/**
 * Clossing connection
 */
function CloseCon($conn) {
 $conn -> close();
}

?>