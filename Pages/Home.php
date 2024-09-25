<?php
namespace Pages;
use Pages\PageInterface;
use Pages\components\posts\PostComponent;

class Home implements PageInterface
{

    public function render()
    {

        $view = View::getInstance();
        $posts = new PostComponent([
            'template'=> '/index/posts',
            'SECTION_CODE'=>$_GET['section'],
            'section_default' =>'',
            'POST_CODE'=>$_GET['post'],
        ]);
        $page_data['title'] = $posts->getMetaData('title');
        $page_data['description'] = $posts->getMetaData('description');
        echo $view->render('index',['page_data'=>$page_data,'posts'=>$posts->render()]);
    }




}
