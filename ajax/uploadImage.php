<?php

$root_path = "./../";

require($root_path . 'common.php');

$tmpFile = $_FILES['__TODO__']['tmp_name'];
$imageTitle = __TODO__;
$imageDescription = __TODO__;

$uploadPath = $root_path . 'images/uploaded/';

// TODO: Save the image to the /images/uploaded/ directory

// TODO: Save the image in the database




exit;

// Hint: Here are some examples of how to use the included database wrapper class:

// Select:
$sql = "SELECT 7 as lucky_number";

if( !$result = $db->sql_query($sql) ) {

	throw new Exception('Could not perform query');

}

$row = $db->sql_fetchrow($result);
$lucky_number = $row['lucky_number'];

// Insert:
$sql = "INSERT INTO table ... ";

if( !$db->sql_query($sql) ) {

	throw new Exception('Could not perform query');

}
