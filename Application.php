<?php

class Application
{
    public static function run()
    {
        $pageClass = (!isset($_GET['page']) || empty($_GET['page']) ) ?  'home' : $_GET['page'];
        $pageClass = 'Pages\\'.ucfirst($pageClass);

        if (class_exists($pageClass)){
            $page_obj = new $pageClass;
            $page = new \Pages\Page($page_obj);
            $page->render();
        }else{
            include $_SERVER['DOCUMENT_ROOT'].'/templates/404.php';
            die();
        }
    }
}
