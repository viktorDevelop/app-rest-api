<?php
namespace tasks\controllers;

use tasks\interfaces\Service;

class Controller
{
    public function getList($request = [], Service $service)
    {
        $service->run();
    }

    public function getByCode($request = [],Service $service)
    {
        $service->run();
    }
}