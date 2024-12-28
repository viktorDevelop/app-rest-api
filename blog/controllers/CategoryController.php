<?php
namespace blog\controllers;

use blog\core\FrontController;

class CategoryController extends FrontController
{
    protected static $temlateName = 'blog';

    public function actionIndex()
    {
        $post = new \blog\components\Posts();
        $post::$templateName = 'posts.list';
        $post = $post->render('list');

        $this->template->setContent($post);
        $this->showTemplate();
    }
}