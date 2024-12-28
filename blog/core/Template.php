<?php
namespace blog\core;


class Template
{
    private View $view;
    private $tmpName;
    public function __construct($tmpName)
    {
        $this->tmpName = $tmpName;
        $this->view = View::getInstance();
    }

    public function setView($alias,$class = '')
    {
        $this->view->$alias = $class;
    }


    public function show()
    {
        $this->view->title = 'title site';
        $this->view->keyword = 'keyword site';

        echo $this->view->render($this->tmpName);
    }
}