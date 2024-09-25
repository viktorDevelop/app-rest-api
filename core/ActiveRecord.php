<?php
namespace core;
use core\Database;

class ActiveRecord
{
    protected $db;
    public function __construct()
    {
        $this->db = Database::getInstance();
    }


}

