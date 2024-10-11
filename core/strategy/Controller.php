<?php

namespace core\strategy;

class Controller
{
    public static function run()
    {
        $import = new Import(new ImportPrice());
        $import->update();
    }
}