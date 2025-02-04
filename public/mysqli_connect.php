<?php 
// This file contains the database access information. 
// This file also establishes a connection to MySQL, 
// selects the database, and sets the encoding.
// Source: INFOST 440 - Sam Goerke

DEFINE('DB_USER', 'infost490_group2');
DEFINE('DB_PASSWORD', 'password');
DEFINE('DB_HOST', 'db');
DEFINE('DB_NAME', 'infost490_group2_db');

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' . mysqli_connect_error());

mysqli_set_charset($mysqli, 'utf8');
