<?php

namespace core\afabrica\profiles;

use core\afabrica\interfaces\Header;
use core\afabrica\interfaces\Menu;
use core\afabrica\interfaces\Template;
use core\afabrica\PageElements\HeaderPublic;
use core\afabrica\PageElements\MenuPublic;

class PagePublic implements Template
{

    public function createMenu(): Menu
    {
        return new MenuPublic();
    }

    public function createHeader(): Header
    {
        return new HeaderPublic();
    }
}