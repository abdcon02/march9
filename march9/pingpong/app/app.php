<?php
        require_once __DIR__."/../vendor/autoload.php";
        require_once __DIR__."/../src/PingPong.php";

        $app = new Silex\Application();
        $app->get(new Silex\Twig\TwigServiceProvider(), array(
            'twig.path' =>__DIR__.'/../views'
        ));

        $app->get("/", function() use ($app)
        {
            return $app['twig']->render('home.twig')
        });

        $app->get("/print_pong", function() use ($app)
        {

            return $app['twig']->render('Pingpong_results.twig')
        });

        return $app;
?>
