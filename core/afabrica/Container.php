<?php
namespace core\afabrica;

use core\afabrica\interfaces\Template;
class Container
{
    private $template;
    public function __construct(Template $template)
    {
        $this->template = $template;
    }

    public function render()
    {
        $this->template->createHeader()->setTitle();
        $this->template->createHeader()->setPhone();
        $this->template->createHeader()->setLogo();
        $this->template->createMenu()->setItemsMenu();
    }
}