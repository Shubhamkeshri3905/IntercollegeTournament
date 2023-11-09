<?php
/*
this file contains database configuration assuming you are running  
running mysql using user "root" and password ""
*/
define('DB_SERVER', 'localhost');
// define('DB_SERVER','sql303.infinityfree.com');
define('DB_USERNAME', 'root');
// define('DB_USERNAME','if0_35383298');
define('DB_PASSWORD', '');
// define('DB_PASSWORD','dxXrXjZ5FZMhrP');
define('DB_NAME', 'login');
// define('DB_NAME','if0_35383298_login');

// try connection to the database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//check the coonection
if ($conn == false) {
    dir('Error :Cannot connect');
}
