<?php
namespace blog\components;

use blog\core\Component;
use blog\core\View;

class Posts extends Component
{

    public function List()
    {
        $this->view->arResult = ['post'=>'title'];
        return  $this->view->render('blog/posts/'.static::$templateName);
    }

    public function One()
    {

    }


}