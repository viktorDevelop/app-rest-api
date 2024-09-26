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
        $sectionCode = (isset($params['section'])) ?? $params['section'];

        if (!$sectionCode){
            return [];
        }
        $res['posts'] =  $this->model(Posts::class)->getPostsByCategory($params['section']);
        $res['parent_section'] = $params['section'];
        return $res;
    }
}