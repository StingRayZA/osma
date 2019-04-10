<?php
function connectDB() {
## Database stuff
global $db;

$db = ($GLOBALS["___mysqli_ston"] = mysqli_connect('localhost', 'username', 'password'));
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysqli_select_db($GLOBALS["___mysqli_ston"], 'osma')) {
		die("Unable to access osma database");
	}
if (!mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM information_schema.tables WHERE table_schema = 'osma' AND table_name = 'data' LIMIT 1;")) {
  $sql = file_get_contents('database.sql');
  if (!mysqli_query($GLOBALS["___mysqli_ston"], mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $sql)) {
    echo mysqli_error($GLOBALS["___mysqli_ston"];
    die("Unable to create database tables");
  }
 } 
}
?>
