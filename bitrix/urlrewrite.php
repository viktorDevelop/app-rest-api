<?php
include $_SERVER['DOCUMENT_ROOT'].'/init.php';


//$router = new \tasks\core\Router();
//
//$router->setPath(Task::class);
//$router->setPath(Posts::class);
//$router->run();

$uri = $_SERVER['REQUEST_URI'];

$routes = [

    1=>[
        'condition'=>'#^/category/([a-z0-9-]+)/([a-z0-9-]+)/?$#',
        'rule'=>'section_id=$1&post_id=$2',
        'controller'=>\medical\controllers\CategoryController::class,
        'method'=>'posts',
        'rest'=>['get']
    ],

    2=>[
        'condition'=>'#^/category/?$#',
        'rule'=>'section_id=245',
        'path'=>'/posts/index.php',
        'controller'=>\medical\controllers\CategoryController::class,
        'method'=>'index',
        'rest'=>['get']
    ],

    3=>[
        'condition'=>'#^/posts/([a-z0-9]+)/([0-9]+)/?$#',
        'rule'=>'section=$1&post=$2',
        'controller'=> \medical\controllers\CategoryController::class,
        'method'=>'index',
        'rest'=>['get','post']
    ],
];





$router = new \medical\Router($routes);
