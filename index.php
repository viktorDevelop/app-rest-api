<?php
//include __DIR__."/templates/template.php";
?>
<?php

$typeRequest = $_SERVER['REQUEST_METHOD'];

if ($typeRequest == 'GET'){

    $arRequest = $_GET;

    if (!isset($arRequest['page']))
        $arRequest['page'] = 'index';
    switch ($arRequest['page']) {
        case 'index':

        break;

        case 'posts':


        break;


        case 'contacts':

        break;

        case 'signIn':

        break;

        case 'registration':

        break;

        case 'logout':

        break;

        default:
            $arPage = ['index','posts','contacts','signIn','registration','logout'];
            if (!in_array($arRequest['page'],$arPage))
                include $_SERVER['DOCUMENT_ROOT'].'/templates/404.php'; die();
        break;
    }

}
include $_SERVER['DOCUMENT_ROOT'].'/templates/template.php';


function render($template,$view,$data = [])
{

    include $_SERVER['DOCUMENT_ROOT'].'/templates/template.php';

}