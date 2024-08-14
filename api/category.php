<?php
include $_SERVER['DOCUMENT_ROOT']."/init.php";
use core\Database;
$db =  Database::getInstance();

$result = $db->query("SELECT * FROM category")

    ->execute()->getAll(PDO::FETCH_ASSOC);

header('content-type:application/json');
echo  json_encode($result);