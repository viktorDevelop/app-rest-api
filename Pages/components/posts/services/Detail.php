<?php
namespace Pages\components\posts\services;
use Pages\components\Component;
use Pages\components\posts\model\Posts;
use Pages\components\posts\services\ComponentStateInterface;

class Detail extends Component implements ComponentStateInterface
{

    public function getData($params = [])
    {
        $postCode = (isset($params['postCode'])) ?? $params['postCode'];
        $sectionCode = (isset($params['section'])) ?? $params['section'];
        if (!$sectionCode){
            return [];
        }
        $res['post'] = $this->model(Posts::class)->getPost($params['postCode']);
        $res['parent_section'] = $params['section'];
        return $res;

    }

    public function getTemplate($tmp)
    {
         return $tmp.'/detail';
    }
}