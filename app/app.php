<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Allergies.php";
    use Symfony\Component\Debug\Debug;
    Debug::enable();
    $app = new Silex\Application();
    $app['debug']=true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });
    $app->post("/", function() use ($app) {
        $player1Input=$_POST['player1Input'];
        $player2Input =$_POST['player2Input'];
        if(strtolower($_POST['player1Input'])==="r"){
            $player1Input = "Rock";
            $player1Beats = "Scissors";
        }else if(strtolower($_POST['player1Input'])==="s"){
            $player1Input = "Scissors";
            $player1Beats = "Paper";
        }else if(strtolower($_POST['player1Input'])==="p"){
            $player1Input = "Paper";
            $player1Beats = "Rock";
        }else{
            return $app['twig']->render('form.html.twig',array("error"=>"Please enter a correct input");
        }

        if(strtolower($_POST['player2Input'])==="r"){
            $player1Beats = "Scissors";
            $player2Input = "Rock";
        }else if(strtolower($_POST['player2Input'])==="s"){
            $player1Beats = "Paper";
            $player2Input = "Scissors";
        }else if(strtolower($_POST['player2Input'])==="p"){
            $player1Beats = "Rock";
            $player2Input = "Paper";
        }else{
            return $app['twig']->render('form.html.twig',array("error"=>"Please enter a correct input");
        }

        $player1 = array('player'=>"Player 1", 'choice'=>$player1Input, 'beats'=>$player1Beats);
        $player2 = array('player'=>"Player 2", 'choice'=>$player2Input, 'beats'=>$player2Beats);

        return $app['twig']->render('form.html.twig',array("player1"=> $player1,"player2"=>$player2));
    });
    return $app;
?>
