<?php
// $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.'); // PRE PHP < 7.0
$id = $_GET['id'] ?? '1'; // PHP > 7.0

echo $id;
