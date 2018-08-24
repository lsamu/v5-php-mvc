<?php
include ('../src/core/router.php');
use V5\MVC;
$router = new Router();
//路由处理
$router ->add("{controller}/{action}",['controller' => 'Home', 'action' => 'index']);
//拦截器处理
$router->dispatch("home/index");
?>