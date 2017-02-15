<?php
    class RockPaperScissors
    {
        function winChecker($player1input, $player2input)
        {
            var_dump($player1input);
            if($player1input['beats']===$player2input['choice']){
                return $player1input['player'] . " wins with " . $player1input['choice'];
            }else{
                return $player2input['player'] . " wins with " . $player2input['choice'];
            }
        }





    }


?>
