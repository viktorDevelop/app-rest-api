<?php
namespace Pages\components\posts\model;

use core\ActiveRecord;
use core\Database;

class Category extends ActiveRecord
{

    protected  static $table = 'category';
    public static function rules()
    {
        return [
            ['title',['length'=>50] ]
        ];
    }

    public function setAttribute($data)
    {
        return [
            'title'=>$data['title'],
            'alias'=>$data['alias']
        ];
    }

    public  function get()
    {
      $category =   $this->db->query('SELECT * FROM category')
            ->execute()->getAll(\PDO::FETCH_ASSOC);
        return $category;
    }

}