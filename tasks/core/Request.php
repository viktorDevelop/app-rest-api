<?php
namespace tasks\core;

class Request
{
    public function __construct()
    {
    }

    public function get()
    {
        if (isset($_GET))
            return $_GET;
    }

    public function post()
    {
        $ar = file_get_contents("php://input");
        return $ar;
    }
}