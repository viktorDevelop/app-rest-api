<?php
namespace Pages\components\posts\services;
use Pages\components\Component;
use Pages\components\posts\model\Posts;
class PostsList   extends Component implements ComponentStateInterface
{
    public function getTemplate($tmp)
    {
         return $tmp.'/post.list';
    }

    public function getData($params = [])
    {
        return $this->model(Posts::class)->get();
    }
}