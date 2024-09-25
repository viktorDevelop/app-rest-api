<?php
namespace Pages\components;

use Pages\components\posts\model\Category;
use Pages\Page;

abstract class Component
{
    public function model($modelName)
    {
        if (class_exists($modelName)){
             return new $modelName;
        }
    }


}