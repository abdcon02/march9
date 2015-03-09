<?php


        require_once __DIR__."/../vendor/autoload.php";
        require_once __DIR__."/../src/PingPong.php";

        $app = new Silex\Application();
        $app['debug'] = true;

        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__.'/../views'
        ));

        $app->get("/", function() use ($app) {
            return $app['twig']->render('home.twig');
        });

        $app->get("/print_pong", function() use ($app)
        {
           $number = new PingPong();
           $number = $number->printPingPong($_GET['number']);
            return $app['twig']->render('Pingpong_results.twig', array('pingpong' => $number));

        });

        return $app;
?>
