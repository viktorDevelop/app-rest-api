<?php
namespace tasks\intefaces;

interface ApiController
{
    public function getList($request = [], Service $service);
}