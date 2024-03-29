<?php

require_once 'lib/Twig/Autoloader.php';
require_once 'functions.inc';

Twig_Autoloader::register();


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
  'cache' => 'cache',
  "debug" => TRUE,
));
 $twig->addExtension(new Twig_Extension_Debug());

$url = explode("?", $_SERVER['REQUEST_URI']);

$section = explode("/", $url[0]);

$variables = thr_twig_get_variables($url[0], $section[1]);

$num = rand(1, 2);

$section = $section[1] . $num . '.twig';

echo $twig->render($section, $variables);

?>
