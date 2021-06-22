<?php

$host = "localhost"; /* Host name */
$user = "id16593248_pls"; /* User */
$password = "sjB0o\L387s4Z6U/"; /* Password */
$dbname = "id16593248_vote"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
