<?php
    class RockPaperScissors
    {
        function winChecker($player1input, $player2input)
        {
            if($player1input['choice']===$player2input['choice']){
                return "Draw";
            }
            if($player1input['beats']===$player2input['choice']){
                return $player1input['player'] . " wins with " . $player1input['choice'];
            }else{
                return $player2input['player'] . " wins with " . $player2input['choice'];
            }
        }

        function player1InputSetup($playerInput)
        {
            if(strtolower($_POST['player1Input'])==="r"){
                $playerInput = "Rock";
                $player1Beats = "Scissors";
            }else if(strtolower($_POST['player1Input'])==="s"){
                $playerInput = "Scissors";
                $player1Beats = "Paper";
            }else if(strtolower($_POST['player1Input'])==="p"){
                $playerInput = "Paper";
                $player1Beats = "Rock";
            }else{
                return "invalid";
            }

            return array('player'=>"Player 1", 'choice'=>$playerInput, 'beats'=>$player1Beats);
        }

        function player2InputSetup($playerInput)
        {
            if(strtolower($_POST['player2Input'])==="r"){
                $playerInput = "Rock";
                $player2Beats = "Scissors";
            }else if(strtolower($_POST['player2Input'])==="s"){
                $playerInput = "Scissors";
                $player2Beats = "Paper";
            }else if(strtolower($_POST['player2Input'])==="p"){
                $playerInput = "Paper";
                $player2Beats = "Rock";
            }else{
                return "invalid";
            }

            return array('player'=>"Player 2", 'choice'=>$playerInput, 'beats'=>$player2Beats);
        }

        function save($results)
        {
            array_unshift($_SESSION['game_rounds'], $results);
        }

        static function getAll()
        {
            return $_SESSION['game_rounds'];
        }

        static function deleteAll()
        {
            $_SESSION['game_rounds'] = array();
        }




    }


?>
