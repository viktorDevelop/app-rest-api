<?php

namespace rest\core;

class Model
{
    protected static $tabel;
    protected $db;
    protected $fields = [];
    public function __construct()
    {
        $this->db = \core\Database::getInstance();

    }

    public function __get(string $name)
    {

        return $this->fields[$name];
    }

    public function __set(string $name, $value): void
    {
        $this->fields[$name] = $value;
    }


    public function getData()
    {
        return [];
    }

    public function getByAlias($alias = '')
    {
        $res =  $this->db->query('SELECT * FROM '.static::$tabel.' WHERE alias = :alias')
            ->setValue('alias',$alias)->execute()->getOne(\PDO::FETCH_ASSOC);


        foreach ($res as $k=>$val)
        {
            $this->$k = $val;
        }
        return $res;

    }

    public function getByList()
    {
        $res =  $this->db->query('SELECT * FROM '.static::$tabel)
            ->execute()->getAll(\PDO::FETCH_ASSOC);
        return $res;
    }
}