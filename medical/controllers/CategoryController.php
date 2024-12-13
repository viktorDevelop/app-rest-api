<?php
namespace medical\controllers;

use medical\Request;

class CategoryController
{
    public function actionIndex(Request $request)
    {
        echo $request->get('section_id');
        echo 'list category';
    }

    public function actionPosts(Request $request)
    {
        echo $request->get();
        echo 'fasdfsf';
    }
}