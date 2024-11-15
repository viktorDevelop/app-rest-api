<?php

namespace core\afabrica\interfaces;
use core\afabrica\interfaces\Menu;
use core\afabrica\interfaces\Header;

interface Template
{
    public function createMenu():Menu;
    public function createHeader():Header;
}