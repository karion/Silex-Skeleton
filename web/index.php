<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get(
    '/test',
    function(){
        return '<h1>TEST</h1>';
    }
);
$app->run();
?>

