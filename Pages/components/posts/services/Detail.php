<?php
namespace Pages\components\posts\services;
use Pages\components\Component;
use Pages\components\posts\services\ComponentStateInterface;

class Detail extends Component implements ComponentStateInterface
{

    public function getData()
    {
//        $this->model()
    }

    public function getTemplate($tmp)
    {
         return $tmp.'/detail';
    }
}