<?php

namespace core\afabrica\PageElements;

class HeaderAdmin implements \core\afabrica\interfaces\Header
{

    public function setTitle()
    {
        echo 'header title admin';
    }

    public function setPhone()
    {
        echo '89999999';
    }

    public function setLogo()
    {
        echo '/upload/logo.png';
    }
}