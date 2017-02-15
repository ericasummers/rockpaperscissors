<?php

    require_once 'src/RockPaperScissors.php';

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = array('player'=>"Player 1", 'choice'=>"Rock", 'beats'=>"Scissors");;
            $second_input = array('player'=>"Player 2", 'choice'=>"Scissors", 'beats'=>"Paper");;
;

            $result = $test_RockPaperScissors->winChecker($first_input, $second_input);

            $this->assertEquals("Player 1 wins with Rock", $result);
        }

        function test_rock_paper()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = array('player'=>"Player 1", 'choice'=>"Rock", 'beats'=>"Scissors");;
            $second_input = array('player'=>"Player 2", 'choice'=>"Paper", 'beats'=>"Rock");;
;

            $result = $test_RockPaperScissors->winChecker($first_input, $second_input);

            $this->assertEquals("Player 2 wins with Paper", $result);
        }

        function test_scissors_paper()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = array('player'=>"Player 1", 'choice'=>"Scissors", 'beats'=>"Paper");;
            $second_input = array('player'=>"Player 2", 'choice'=>"Paper", 'beats'=>"Rock");;
;

            $result = $test_RockPaperScissors->winChecker($first_input, $second_input);

            $this->assertEquals("Player 1 wins with Scissors", $result);
        }

    }






?>
