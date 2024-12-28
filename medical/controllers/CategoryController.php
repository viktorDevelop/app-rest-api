<?php
namespace medical\controllers;

use medical\Request;

class CategoryController
{
    public function actionIndex(Request $request)
    {
        $r =  $request->get();
        var_dump($r);
        echo 'list category';
    }

    //category/bitrix/php-article
    public function actionPosts(Request $request)
    {
        echo $request->get();
        echo 'fasdfsf';
    }

}