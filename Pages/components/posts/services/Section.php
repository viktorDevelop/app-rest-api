<?php
namespace Pages\components\posts\services;
use Pages\components\Component;
use Pages\components\posts\model\Category;

class Section extends Component implements ComponentStateInterface
{

    public function getData($params = [])
    {
        return $this->model(Category::class)->get();

    }

    public function getTemplate($tmp)
    {
        return $tmp.'/section';
    }

}