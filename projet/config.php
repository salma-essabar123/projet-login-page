<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('hostname', 'localhost');
define('dbuser', 'root');
define('dbpass', '');
define('dbname', 'demo');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(hostname, dbuser, dbpass, dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>