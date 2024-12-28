<?php
////include __DIR__."/templates/template.php";
include $_SERVER['DOCUMENT_ROOT'].'/init.php';
//
////Application::run();
//?>
<!---->
<?php
$routes = [
    0=>[
        'condition'=>'#^/$#',
        'rule'=>'section=10&post=20',
        'controller'=>\blog\controllers\CategoryController::class,
        'method'=>'index',
        'rest'=>['get','post']
    ],
];
$router = new \medical\Router($routes);



?>



