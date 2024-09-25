<?php
namespace Pages;

class View
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        $class = __CLASS__;
        if (!isset(self::$instance)){
            self::$instance = new $class;
        }

        return self::$instance;
    }

    public function render($view,$data,$show = false)
    {
        foreach ($data as $key => $value) {

            $$key = $value;
        }


        ob_start();
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$view.'/template.php';
        if (file_exists($path)) {
            include $path;
        }else{
            echo "404";
        }

        $content = ob_get_contents();

        ob_clean();
        if ($show) {
            echo $content;
        }else{
            return $content;
        }
    }
}