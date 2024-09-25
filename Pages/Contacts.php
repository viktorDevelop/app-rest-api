<?php
namespace Pages;
use Pages\PageInterface;
class Contacts implements PageInterface
{
    public function render()
    {
        echo 'Contacts';
    }
}