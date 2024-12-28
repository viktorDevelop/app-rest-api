<?php
////include __DIR__."/templates/template.php";
include $_SERVER['DOCUMENT_ROOT'].'/init.php';
//
////Application::run();
//?>
<!---->
<?php
//$routes = [
//    0=>[
//        'condition'=>'#^/$#',
//        'rule'=>'section=10&post=20',
//        'controller'=> \medical\controllers\CategoryController::class,
//        'method'=>'index',
//        'rest'=>['get','post']
//    ],
//];
//$router = new \medical\Router($routes);


$t = new \blog\core\Template('blog');

$post = new \blog\components\Posts();
$post::$templateName = 'posts.list';
$post = $post->render('list');

$t->setView('content',$post);
$t->setView('topMenu',(new \blog\components\Menu())->render('topMenu'));
$t->show();
?>



