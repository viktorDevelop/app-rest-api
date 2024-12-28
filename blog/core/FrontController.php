<?php
namespace blog\core;

class FrontController
{
    protected static $temlateName;
    protected Template $template;

    public function __construct()
    {
        $this->template = new Template(static::$temlateName);
    }

    protected function showTemplate()
    {
        $this->template->setView('topMenu',(new \blog\components\Menu())->render('topMenu'));
        $this->template->show();
    }
}