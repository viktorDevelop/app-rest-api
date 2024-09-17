<?php
include $_SERVER['DOCUMENT_ROOT']."/init.php";
use core\Database;

class Autorization{

    private $login,$password;
    private  static $isAdmin,$isAuth;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public static function isAdmin()
    {

    }
    public static function isAuth($role = '')
    {
        if (static::$isAuth){

            var_dump(static::$isAuth);
        }
    }

    public function authorizate()
    {
        $db =  Database::getInstance();
        $result = $db->query('
            SELECT * FROM
                   users
                           inner join roles
                           ON roles.id = users.role
               where login = :login and password = :password')
            ->setValue('login',$this->login)
            ->setValue('password',$this->password)
        ->execute()->getOne(PDO::FETCH_ASSOC);
        self::$isAuth = $result;
        return $result;
    }
}

class User extends Autorization {
    public static function signIn($login,$password)
    {
        return (new Autorization($login,$password));
    }
}


class Request{
    public static function post($key)
    {
        if (key_exists($key,$_POST))
        {
            return $_POST[$key];
        }
    }
}
$login = Request::post('login');
$password = Request::post('password');

$user = User::signIn($login,$password);

$user->authorizate();
//$user->isAdmin();
//$user->isAuth();

User::isAuth();
