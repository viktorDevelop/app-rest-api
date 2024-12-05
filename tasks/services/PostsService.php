<?php

namespace tasks\services;

use tasks\interfaces\Service;

class PostsService implements Service
{
    private \rest\model\PostsModel $postModel;
    public  $showDetail = false;
    public $showList = true;
    public  $showComment = false;
    private $arResult = [];
    private $params = [];


    public function __construct($params = [])
    {
        $this->params = $params;
        if (isset($params['code']))
        {
            $this->showDetail = true;
        }else{
            $this->showList = true;
        }


        $this->postModel  = new \rest\model\PostsModel();
    }

    public function get()
    {

        if ($this->showDetail)
        {
            $comments = new \rest\model\CommentsModel();
            $comments->getByField('post_id',1);
            return [
                'items'=>$this->postModel->getByAlias($this->params['code'][0]),
                'comments'=>$comments->getByField('post_id',1)
            ];
        }

        if ($this->showList)
        {
            return $this->postModel->getByList();
        }
    }

    public function run()
    {

        echo json_encode([

            'result'=>[
                'success'=>true,
                'error'=>false,
                'items'=> $this->get()
            ]
        ]);
    }
}