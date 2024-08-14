<?php
namespace core;

class Database
{
    private $pdo;
    private $sth;
    private static $instance;
    private  function __construct()
    {
        $arConfig = [];
        $arConfig['host'] = 'db';
        $arConfig['user'] = 'bitrix';
        $arConfig['db_name'] = 'app-vue-api';
        $arConfig['password'] = '123';
        $this->pdo = new \PDO('mysql:dbname='.$arConfig['db_name'].';host='.$arConfig['host'],$arConfig['user'],$arConfig['password']);

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {

            $cl = __CLASS__;

            self::$instance = new $cl;
        }

        return self::$instance;
    }

    public function query($sql)
    {
        $this->sth =  $this->pdo->prepare($sql);
        return $this;
    }

    public function setValue($column,$val)
    {
        $this->sth->bindValue(':'.$column,$val);
        return $this;
    }

    public function execute()
    {
        $this->sth->execute();
        return $this;
    }

    public function getAll($type = '')
    {
        if ($type){
            return $this->sth->fetchAll($type);
        }else{
            return $this->sth->fetchAll();
        }
    }

    public function getOne($type = '')
    {
        if ($type){
            return $this->sth->fetch($type);
        }else{
            return $this->sth->fetch();
        }

    }

}