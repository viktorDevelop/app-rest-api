<?php
namespace core\afabrica\profiles;
use core\afabrica\interfaces\Template ;
use core\afabrica\interfaces\Menu;
use core\afabrica\interfaces\Header;
use core\afabrica\PageElements\HeaderAdmin;
use core\afabrica\PageElements\MenuAdmin;

class PageAdmin implements Template
{

    public function createMenu():Menu
    {
       return new MenuAdmin();
    }

    public function createHeader():Header
    {
        return new HeaderAdmin();
    }
}