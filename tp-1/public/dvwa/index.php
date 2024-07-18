<?php
require_once '../../config/config.inc.php';
require_once '../../src/helpers/Database.php';

$db = new Database();
$conn = $db->getConnection();

// Your DVWA setup and initialization code here
