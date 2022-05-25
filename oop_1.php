<?php

class RockPaperScissor{
    public $turns;

    public static $count=0;
    
    public function __construct($turns)
    {
        $this->turns = $turns;
    }

    public function info(){
        echo "Avete $this->turns turni da giocare\n";
    }
}


class Player extends RockPaperScissor{
    public $name;
    public $play;

    public static $count=0;

    public function __construct($name,$play,$turns){

        parent::__construct($turns);
        $this->name = $name; 
        $this->play = $play;
        self::$count++;
    }

    public function info(){
        echo "Il giocatore $this->name ha giocato $this->play\n";
        $remainingTurns= $this->turns-self::$count;
        echo "Vi restano $remainingTurns turni da giocare\n";

    }



}


// $test = new RockPaperScissor(5);


// $test->info();


// $player1= new Player("Filippo","carta","5");

// $player1->info();

function play (){

    $turns= new RockPaperScissor(readline("inserisci il numero di volte che vuoi giocare (almeno 3): \n"));
    $player1= new Player(readline("inserisci nome giocatore 1: \n"),readline("Scegli  1 per sasso, 2 per carta e 3 per forbici: \n"),$turns->turns);
    $player2= new Player(readline("inserisci nome giocatore 2: \n"),readline("Scegli  1 per sasso, 2 per carta e 3 per forbici: \n"),$turns->turns);

    
    $wincountP1=0;
    $wincountP2=0;
    $i=1;

    if($player1->play==1 && $player2->play==1){
        echo "Draw !! sasso contro sasso \n";
        
        
    } elseif ($player1->play==1 && $player2->play==2) {
        $wincountP2= $wincountP2+1;
        echo "La carta batte il sasso ! \n";
        
        
    }elseif ($player1->play==1 && $player2->play==3) {
        $wincountP1=$wincountP1+1;
        echo "Il sasso batte le forbici ! \n";
        
        
    }elseif($player1->play==2 && $player2->play==1){
        echo "La carta batte il sasso ! \n";
        $wincountP1=$wincountP1+1;
        
        
    } elseif ($player1->play==2 && $player2->play==2) {
        echo "Draw !! carta contro carta \n";
        
        
    }elseif ($player1->play==2 && $player2->play==3) {
        $wincountP2= $wincountP2+1;
        echo "Le forbici battono la carta! \n";
        
        
    }elseif($player1->play==3 && $player2->play==1){
        $wincountP2= $wincountP2+1;
        echo "Il sasso batte le forbici ! \n";
        
        
    } elseif ($player1->play==3 && $player2->play==2) {
        $wincountP1=$wincountP1+1;
        echo "Le forbici battono la carta! \n";
        
        
    }elseif ($player1->play==3 && $player2->play==3) {
        echo "Draw !! forbici contro forbici \n";
        
        
    }
    if($i<$turns->turns){
    for ($i; $i <$turns->turns ; $i++) { 
        if($player1->play==1 && $player2->play==1){

            $player1->info();
            echo "Draw !! sasso contro sasso \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        } elseif ($player1->play==1 && $player2->play==2) {
            $wincountP2= $wincountP2+1;
            echo "La carta batte il sasso ! \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        }elseif ($player1->play==1 && $player2->play==3) {
            $wincountP1=$wincountP1+1;
            echo "Il sasso batte le forbici ! \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        }elseif($player1->play==2 && $player2->play==1){
            echo "La carta batte il sasso ! \n";
            $wincountP1=$wincountP1+1;
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        } elseif ($player1->play==2 && $player2->play==2) {
            echo "Draw !! carta contro carta \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        }elseif ($player1->play==2 && $player2->play==3) {
            $wincountP2= $wincountP2+1;
            echo "Le forbici battono la carta! \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        }elseif($player1->play==3 && $player2->play==1){
            $wincountP2= $wincountP2+1;
            echo "Il sasso batte le forbici ! \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        } elseif ($player1->play==3 && $player2->play==2) {
            $wincountP1=$wincountP1+1;
            echo "Le forbici battono la carta! \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        }elseif ($player1->play==3 && $player2->play==3) {
            echo "Draw !! forbici contro forbici \n";
            $player1->play=readline("$player1->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
            $player2->play=readline("$player2->name scegli  1 per sasso, 2 per carta e 3 per forbici: \n");
        }
    }
    }
    
    if($wincountP1>$wincountP2){
        return print_r("Ha vinto il giocatore 1 : $player1->name \n");
    }else if($wincountP2>$wincountP1){
        return print_r("Ha vinto il giocatore 2 : $player2->name \n");
    }else{
        return print_r("Pareggio");
    }


}

play();