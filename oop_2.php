<?php

class EldenRingPlayer{
    public $name;
    public $gender;
    
    public static $count=0;

    public function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender= $gender;
        self::$count++;
    }

    public function pgCount(){
        $app= self::$count;
        return print_r("Hai creato $app personaggi \n");
    }

}

class Hero extends EldenRingPlayer {
    public $gift;
    public static $class="Hero";
    public static $vigor = 14;
    public static $mind = 9;
    public static $endurance = 12;
    public static $strength = 16;
    public static $dexterity = 9;
    public static $intelligence = 14;
    public static $faith = 14;
    public static $arcane = 11;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Bandit extends EldenRingPlayer {
    public $gift;
    public static $class="Bandit";
    public static $vigor = 10;
    public static $mind =11;
    public static $endurance = 10;
    public static $strength = 9;
    public static $dexterity = 13;
    public static $intelligence = 9;
    public static $faith = 8;
    public static $arcane = 14;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Astrologer extends EldenRingPlayer {
    public $gift;
    public static $class="Astrologer";
    public static $vigor = 9;
    public static $mind = 15;
    public static $endurance = 9;
    public static $strength = 8;
    public static $dexterity = 12;
    public static $intelligence = 16;
    public static $faith = 7;
    public static $arcane = 9;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Warrior extends EldenRingPlayer {
    public $gift;
    public static $class="Warrior";
    public static $vigor = 11;
    public static $mind = 12;
    public static $endurance = 11;
    public static $strength = 10;
    public static $dexterity = 16;
    public static $intelligence = 10;
    public static $faith = 8;
    public static $arcane = 9;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Prisoner extends EldenRingPlayer {
    public $gift;
    public static $class="Prisoner";
    public static $vigor = 11;
    public static $mind = 12;
    public static $endurance = 11;
    public static $strength = 11;
    public static $dexterity = 14;
    public static $intelligence = 14;
    public static $faith = 6;
    public static $arcane = 9;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Confessor extends EldenRingPlayer {
    public $gift;
    public static $class="Confessor";
    public static $vigor = 10;
    public static $mind = 13;
    public static $endurance = 10;
    public static $strength = 12;
    public static $dexterity = 12;
    public static $intelligence = 9;
    public static $faith = 14;
    public static $arcane = 9;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Wretch extends EldenRingPlayer {
    public $gift;
    public static $class="Wretch";
    public static $vigor = 10;
    public static $mind = 10;
    public static $endurance = 10;
    public static $strength = 10;
    public static $dexterity = 10;
    public static $intelligence = 10;
    public static $faith = 10;
    public static $arcane = 10;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Vagabond extends EldenRingPlayer {
    public $gift;
    public static $class="Vagabond";
    public static $vigor = 15;
    public static $mind = 10;
    public static $endurance = 11;
    public static $strength = 14;
    public static $dexterity = 13;
    public static $intelligence = 9;
    public static $faith = 9;
    public static $arcane = 7;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Prophet extends EldenRingPlayer {
    public $gift;
    public static $class="Prophet";
    public static $vigor = 10;
    public static $mind = 14;
    public static $endurance = 8;
    public static $strength = 11;
    public static $dexterity = 10;
    public static $intelligence = 7;
    public static $faith = 16;
    public static $arcane = 10;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}
class Samurai extends EldenRingPlayer {
    public $gift;
    public static $class="Samurai";
    public static $vigor = 12;
    public static $mind = 11;
    public static $endurance = 13;
    public static $strength = 12;
    public static $dexterity = 15;
    public static $intelligence = 9;
    public static $faith = 8;
    public static $arcane = 8;

    public function __construct($name,$gender,$gift){
        parent::__construct($name,$gender);
        $this->gift = $gift;
    }

    public function pgStat(){
        echo "il tuo personaggio ha classe:".self::$class."\nVigore:". self::$vigor ."\nMente:". self::$mind ."\n"."Resistenza:". self::$endurance ."\n"."Forza:". self::$strength ."\n"."Destrezza:". self::$dexterity ."\n"."Intelligenza:". self::$intelligence ."\n"."Fede:". self::$faith ."\n"."Arcano:". self::$arcane ."\n";
    }

    
}


$pg1= new Hero("Fil","M","MasterKey");
$pg1->pgStat();
$pg1->pgCount();

$pg2= new Samurai("Fil","M","MasterKey");

$pg2->pgStat();
$pg2->pgCount();