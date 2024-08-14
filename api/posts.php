<?php
include $_SERVER['DOCUMENT_ROOT']."/init.php";
use core\Database;
$db =  Database::getInstance();

$result = $db->query("
SELECT
    category.title as categoryTitle,
    category.id as idCat,
    posts.*
FROM posts
    LEFT JOIN category
        ON category.id = posts.id_category")

    ->execute()->getAll(PDO::FETCH_ASSOC);

header('content-type:application/json');
echo  json_encode($result);