<?php
namespace tasks\core;

class Router
{
    private $arRoutes = [];
    private $getParams;

    public  function get()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $checkUriPath =  $this->checkUri();
            if ($checkUriPath)
            {
                $namespaceObjController = '\\tasks\\controllers\\'.ucfirst($checkUriPath['controller']);
                $controller = new $namespaceObjController();
                $service = $checkUriPath['controller'].'Service';
                $namespaceObjService = '\\tasks\\services\\'.ucfirst($checkUriPath['controller']).'Service';
                $service = new  $namespaceObjService($this->getParams);
                $method = $checkUriPath['method'];
                $controller->$method($this->getParams,$service);
            }
        }else{
            return false;
        }
    }

    public  function post()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $checkUriPath =  $this->checkUri('post');
            if ($checkUriPath)
            {
                $namespaceObjController = '\\tasks\\controllers\\'.ucfirst($checkUriPath['controller']);
                $controller = new $namespaceObjController();
                $method = $checkUriPath['method'];
                $controller->$method($this->getParams);
            }
        }else{
            return false;
        }
    }

    public  function put()
    {

    }

    public  function delete()
    {

    }

    private function checkUri($key = 'get')
    {
        foreach ($this->arRoutes as $k=>$val)
        {
            foreach ($val[$key] as $p=>$item)
            {
                $res = preg_match_all('~^'.$p.'/?$~',$_SERVER['REQUEST_URI'],$match);
                if ($res){

                    $this->getParams = $match;
                    return  $item;
                }
            }
        }

        return false;
    }

    public  function setPath($controller)
    {
        $class = $controller;
        $class = lcfirst($class);
//
        $route =  [

            'post'=>[
                '/'.$class.'/add'=>[
                    'controller'=>$class,
                    'method'=>'add'
                ]

            ],
            'put'=>'/'.$class.'/update/$1',
            'delete'=>'/'.$class.'/delete/$1',
            'get'=>[
                '/'.$class => [
                    'controller'=>$class,
                    'method'=>'getList'
                ],
                '/'.$class.'/(?P<code>[a-z0-9-]+)'=>[
                    'controller'=>$class,
                    'method'=>'getByCode'
                ]

            ],
        ];

        array_push($this->arRoutes,$route);

    }


    public  function run()
    {

//        echo '<pre>';
//        print_r($this->arRoutes);
        $this->get();
        $this->post();
//        $router::put();
//        $router::delete();

    }
}