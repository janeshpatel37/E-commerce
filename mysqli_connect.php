<?php # Script 9.2 - mysqli_connect.php

 // This file contains the database access information.
 // This file also establishes a connection to MySQL,
 // selects the database, and sets the encoding.

 // Set the database access information as constants:
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'sitename');
//$const = get_defined_constants();
$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'inventory';
 // Make the connection:
// $dbc = @mysqli_connect($const['DB_HOST'],$const['DB_USER'],$const['DB_PASSWORD'],$const['DB_NAME']) OR die('Could not connect to MySQL:' . mysqli_connect_error() );
 $dbc = @mysqli_connect($host,$user,$pass,$db) OR die('Could not connect to MySQL:' . mysqli_connect_error() );

 // Set the encoding...
 mysqli_set_charset($dbc, 'utf8');
