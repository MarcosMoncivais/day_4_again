<?php

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));



$app->get("/", function() use ($app) {

return $app['twig']->render('tasks.html.twig');

}
 ?> 
