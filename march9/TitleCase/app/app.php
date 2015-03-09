<?php
        require_once __DIR__."/../vendor/autoload.php";
        require_once __DIR__."/../src/TitleCaseGenerator.php";

        $app = new Silex\Application();
        $app['debug']=true;

        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__.'/../views'
        ));

        $app->get("/", function() use ($app) {

            return $app['twig']->render('form.twig');
        });

        $app->get("/view_title_case", function() use ($app) {
            $phrase= new TitleCaseGenerator;
            $this_phrase = $phrase->makeTitleCaseLittle($_GET['phrase']);

            return $app['twig']->render('title_case.twig', array('phrase' => $this_phrase));
        });


        return $app;

?>
