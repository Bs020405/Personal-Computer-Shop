<?php
	$db_name = 'pcs';
	$db_user = 'root';
	$db_pass = '';
    $db_host = 'localhost';
    
    global $connect_db;
    $connect_db = new mysqli($db_host,$db_user,$db_pass,$db_name );
    if ( mysqli_connect_errno() ) {
        echo "Connection failed: %s\ ", mysqli_connect_error();
        exit();
    }