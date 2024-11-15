<?php

namespace core\afabrica;

use core\afabrica\profiles\PageAdmin;
use core\afabrica\profiles\PagePublic;

class Application
{
    public function admin()
    {
        (new Container(new PageAdmin()))->render();
    }

    public function index()
    {
        (new Container(new PagePublic()))->render();
    }
}