<?php

return $routes = [

        [
            'condition'=>'#^/category/([a-z0-9-]+)/?$#',
            'rule'=>'section_code=$1',
            'controller'=>\medical\controllers\CategoryController::class,
            'method'=>'index',
            'rest'=>['get']
        ],

        [
            'condition'=>'#^/category/{any}$#',
            'rule'=>'section_code=$1',
            'controller'=>\medical\controllers\CategoryController::class,
            'method'=>'index',
            'rest'=>['get']
        ],

        [
            'condition'=>'#^/posts/{str}/{any}$#',
            'rule'=>'section_code=$1',
            'controller'=>\medical\controllers\CategoryController::class,
            'method'=>'index',
            'rest'=>['get']
        ],


        [
            'condition'=>'#^/([a-z0-9-]+)/([a-z0-9]+)/([a-z0-9-]+)/?$#',
            'rule'=>'controller=$1&model=$2&view=$3',
            'controller'=> \medical\controllers\CategoryController::class,
            'method'=>'index',
            'rest'=>['get','post']
        ]
];
//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aa

