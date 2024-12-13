<?php
//include __DIR__."/templates/template.php";
include $_SERVER['DOCUMENT_ROOT'].'/init.php';

//Application::run();
?>

<?php



//win checkbox button input
//mac checkbox button input

//admin   header menu topMenu content footer
//public  header menu topMenu content footer

$routes = [
    0=>[
        'condition'=>'#^/$#',
        'rule'=>'section=10&post=20',
        'controller'=> \medical\controllers\CategoryController::class,
        'method'=>'index',
        'rest'=>['get','post']
    ],
];
$router = new \medical\Router($routes);

