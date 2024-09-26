<?php
namespace Pages\components\posts;

use Pages\components\Component;
use Pages\components\posts\model\Category;
use Pages\components\posts\model\Posts;
use Pages\View;
use Pages\components\posts\services\PageType;

/** задает раздел для страницы
 *
 * */
class PostComponent extends Component
{

    //?page=home&section=bitrix&post=bitrix-post detail
    //?page=home&section=bitrix list posts by section
    //?page=home list sections
    private $template;
    private $params = [];
    private $arResult = [];

    public function __construct($arParams = [])
    {
        $this->params = $arParams;
        $this->template = (isset($arParams['template'])) ? $arParams['template'] :'';
        $this->init();
    }

    public function init()
    {
        $section = ($this->params['SECTION_CODE']) ? $this->params['SECTION_CODE'] : $this->params['section_default'];
        $postCode = ($this->params['POST_CODE']) ?? $this->params['POST_CODE'];

        $pageType = new PageType($section,$postCode);
        $page_variant =  $pageType->get();

        $this->arResult =  $page_variant->getData(['section'=>$section,'postCode'=>$postCode]);
        $this->template = $page_variant->getTemplate($this->template);

    }


    public function render()
    {
       return  View::getInstance()->render($this->template,['arResult'=>$this->arResult]);
    }

    public function getMetaData($val)
    {
        return 0;
    }
}