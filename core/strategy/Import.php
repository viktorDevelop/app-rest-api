<?php

namespace core\strategy;

class Import implements ImportInterface
{
    private $type;
    public function __construct(ImportInterface $type)
    {
        $this->type = $type;
    }

    public function update()
    {
        $this->type->update();
    }
}

