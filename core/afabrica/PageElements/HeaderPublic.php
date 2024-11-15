<?php

namespace core\afabrica\PageElements;

class HeaderPublic implements \core\afabrica\interfaces\Header
{

    public function setTitle()
    {
        return 'header title Public';
    }

    public function setPhone()
    {
        return '8966666666';
    }

    public function setLogo()
    {
        return '/upload/logo.png';
    }
}