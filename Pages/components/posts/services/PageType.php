<?php
namespace Pages\components\posts\services;
use Pages\components\posts\services\Section;
use Pages\components\posts\services\Detail;
use Pages\components\posts\services\PostsList;

class PageType
{
    private $postCode;
    private $section;
    public  $obj;
    public function __construct($section = '',$postCode = '')
    {
        $this->section = $section;
        $this->postCode = $postCode;
        $this->isSection();
        $this->isPostDetail();
        $this->isPostList();
    }

    private function isSection()
    {
        if (empty($this->section))
        {
            $this->obj = new Section();


        }
    }

    private function isPostList()
    {
       if (!empty($this->section))
       {
           $this->obj = new PostsList();

       }
    }

    private function isPostDetail()
    {
        if (!empty($this->postCode))
        {
            $this->obj =  new Detail();

        }
    }

    public function get()
    {

        return  $this->obj;
    }
}
