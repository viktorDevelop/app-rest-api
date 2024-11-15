<?php

namespace rest\controllers;

use rest\core\Component;
use rest\model\CategoryModel;
use rest\model\CommentsModel;
use rest\model\PostsModel;

class PageController extends FrontController
{
    public function actionIndex()
    {
        $postComment = new Component(new PostsModel());
        $postComment->bindData('id','post_id',new CommentsModel(),'comments');
        $arPostComment = $postComment->get();


        $catPost = new Component(new CategoryModel());
        $catPost->bindData('id','category_id',$arPostComment,'posts');
        $ar = $catPost->get();
        echo json_encode($ar);
    }
}