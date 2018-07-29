<?php

/*

	db.php
	
	Database Connector

								*/

require($root_path . 'includes/classes/mysql.php');

// Make the database connection.
$db = new sql_db(DB_HOST, DB_USER, DB_PASS, DB_DATABASE, false);
if(!$db->db_connect_id)
{
   message_die(CRITICAL_ERROR, "Could not connect to the database.");
}

// Set connection encoding
$db->sql_set_charset('utf8mb4');
