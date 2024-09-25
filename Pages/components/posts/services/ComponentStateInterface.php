<?php
namespace Pages\components\posts\services;

interface ComponentStateInterface
{
    public function getData($params = []);
    public function getTemplate($tmp);
}
