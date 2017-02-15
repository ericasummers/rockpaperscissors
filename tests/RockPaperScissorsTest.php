<?php

    require_once 'src/RockPaperScissors.php';

    class RockPaperScissors extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            $result = $test_RockPaperScissors->winChecker($first_input, $second_input);

            $this->assertEquals("Player 1 wins with rock", $result);
        }
        
    }






?>
