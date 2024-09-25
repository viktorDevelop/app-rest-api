<?php
namespace Pages\components\posts\model;

use core\ActiveRecord;

class Posts extends ActiveRecord
{
    public function get($section ='',$postCode = '')
    {
        if ($section)
            return $this->getPostsByCategory($section);
        if ($postCode)
            return $this->getPost($postCode);
    }

    private function getPostsByCategory($section ='')
    {
        $res =   $this->db->query('select * from posts where category_id IN 
                          (select id from category where alias = :alias)')
            ->setValue('alias',$section)
            ->execute()
            ->getAll(\PDO::FETCH_ASSOC);
        return $res;
    }

    private function getPost($postCode = '')
    {
        $res = $this->db->query('SELECT * FROM posts WHERE alias = :alias');
        $res->setValue('alias',$postCode);
       return $res->execute()->getOne(\PDO::FETCH_ASSOC);
    }
}