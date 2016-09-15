<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Score.php";

    $app = new Silex\Application();
    $app["debug"] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/results", function() use ($app) {
        $word_input = $_GET['word'];
        $new_score = new Score();
        $new_score->getScore($word_input);
        return $app["twig"]->render("results.html.twig", array("score" => $new_score, "word" => $word_input));
    });

    return $app;
 ?>
