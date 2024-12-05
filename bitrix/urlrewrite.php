<?php
include $_SERVER['DOCUMENT_ROOT'].'/init.php';

//interface ApiController
//{
//    public function getList($request = [], Service $service);
//}
//class Task implements ApiController
//{
//
//    public function getByCode($code = [])
//    {
//        var_dump($code);
//    }
//
//
//    public function add()
//    {
//        http_response_code(200);
//        header('Content-Type: application/json');
//        echo  json_encode([
//           'success'=>true,
//           'error'=>'',
//           'data'=>[]
//        ]);
//    }
//
//    public function getList($request = [], Service $service)
//    {
//        // TODO: Implement getList() method.
//    }
//}
//
//interface Service
//{
//    public function run();
//}
//class PostsService implements Service
//{
//    private \rest\model\PostsModel $postModel;
//    public  $showDetail = false;
//    public $showList = true;
//    public  $showComment = false;
//    private $arResult = [];
//    private $params = [];
//
//
//    public function __construct($params = [])
//    {
//        $this->params = $params;
//        if (isset($params['code']))
//        {
//            $this->showDetail = true;
//        }else{
//            $this->showList = true;
//        }
//
//
//        $this->postModel  = new \rest\model\PostsModel();
//    }
//
//    public function get()
//    {
//
//        if ($this->showDetail)
//        {
//            $comments = new \rest\model\CommentsModel();
//            $comments->getByField('post_id',1);
//           return [
//                'items'=>$this->postModel->getByAlias($this->params['code'][0]),
//                'comments'=>$comments->getByField('post_id',1)
//               ];
//        }
//
//        if ($this->showList)
//        {
//            return $this->postModel->getByList();
//        }
//    }
//
//    public function run()
//    {
//
//        echo json_encode([
//
//            'result'=>[
//                'success'=>true,
//                'error'=>false,
//                'items'=> $this->get()
//            ]
//        ]);
//    }
//}
//
//class Controller
//{
//    public function getList($request = [], Service $service)
//    {
//        $service->run();
//    }
//
//    public function getByCode($request = [],Service $service)
//    {
//        $service->run();
//    }
//}
//
//class Posts extends Controller
//{
//
//
//}
//
//class Router
//{
//    private $arRoutes = [];
//    private $getParams;
//
//    public  function get()
//    {
//        if ($_SERVER['REQUEST_METHOD'] == 'GET')
//        {
//           $checkUriPath =  $this->checkUri();
//           if ($checkUriPath)
//           {
//               $controller = new $checkUriPath['controller'];
//               $service = $checkUriPath['controller'].'Service';
//               $service = new $service($this->getParams);
//               $method = $checkUriPath['method'];
//               $controller->$method($this->getParams,$service);
//           }
//        }else{
//            return false;
//        }
//    }
//
//    public  function post()
//    {
//        if ($_SERVER['REQUEST_METHOD'] == 'POST')
//        {
//
//            $checkUriPath =  $this->checkUri('post');
//            if ($checkUriPath)
//            {
//                $controller = new $checkUriPath['controller'];
//                $method = $checkUriPath['method'];
//                $controller->$method($this->getParams);
//            }
//        }else{
//            return false;
//        }
//    }
//
//    public  function put()
//    {
//
//    }
//
//    public  function delete()
//    {
//
//    }
//
//    private function checkUri($key = 'get')
//    {
//        foreach ($this->arRoutes as $k=>$val)
//        {
//            foreach ($val[$key] as $p=>$item)
//            {
//                $res = preg_match_all('~^'.$p.'/?$~',$_SERVER['REQUEST_URI'],$match);
//                if ($res){
//
//                    $this->getParams = $match;
//                    return  $item;
//                }
//            }
//        }
//
//        return false;
//    }
//
//    public  function setPath($controller)
//    {
//        $class = $controller;
//        $class = lcfirst($class);
////
//         $route =  [
//
//             'post'=>[
//                 '/'.$class.'/add'=>[
//                     'controller'=>$class,
//                     'method'=>'add'
//                 ]
//
//             ],
//             'put'=>'/'.$class.'/update/$1',
//             'delete'=>'/'.$class.'/delete/$1',
//             'get'=>[
//                 '/'.$class => [
//                     'controller'=>$class,
//                     'method'=>'getList'
//                 ],
//                 '/'.$class.'/(?P<code>[a-z0-9-]+)'=>[
//                     'controller'=>$class,
//                     'method'=>'getByCode'
//                 ]
//
//             ],
//         ];
//
//      array_push($this->arRoutes,$route);
//
//    }
//
//
//    public  function run()
//    {
//
////        echo '<pre>';
////        print_r($this->arRoutes);
//        $this->get();
//        $this->post();
////        $router::put();
////        $router::delete();
//
//    }
//}


$router = new \tasks\core\Router();

$router->setPath(Task::class);
$router->setPath(Posts::class);
$router->run();
