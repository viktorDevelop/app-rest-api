<?php
namespace blog\core;

class Component
{
    protected View $view;
    public static $templateName;

    public function __construct()
    {
        $this->view = View::getInstance();
    }

    public function render($type)
    {
        return $this->$type(static::$templateName);

    }
}