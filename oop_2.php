<?php

// CREATE CLASSE PADRE CON CLASSI FIGLIE

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

// VARIABILI DI APPOGGIO


$pgs=[];


// CREAZIONI FUNZIONI SINGOLE

function menu(){
    $a=1;
    do{
        $choice=readline("\nPremi 1 per creare un personaggio\nPremi 2 per visualizzare i tuoi personaggi e le loro statistiche\nPremi 3 per vedere i nomi dei personaggi hai creato\nPremi 0 per uscire\n");

        switch ($choice) {
            case '1':
                createPG();
                break;
            case '2':
                viewPgs();
                break;
            case '3':
                viewNames();
                break;
            
            default:'0';
                return $a=0;
                break;
        } 
    }while($a!=0);
}

function createPG(){
    $selectPg= readline("Scegli fra:\n-Hero\n-Bandit\n-Astrologer\n-Warrior\n-Prisoner\n-Confessor\n-Wretch\n-Vagabond\n-Prophet\n-Samurai\n");
    global $pgs;
    switch ($selectPg) {
        case 'Hero':
            $pg= new Hero(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Hero è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Bandit':
            $pg= new Bandit(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Bandit è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Astrologer':
            $pg= new Astrologer(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Astrologer è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Warrior':
            $pg= new Warrior(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Warrior è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Prisoner':
            $pg= new Prisoner(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Prisoner è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Confessor':
            $pg= new Confessor(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Confessor è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Wretch':
            $pg= new Wretch(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Wretch è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Vagabond':
            $pg= new Vagabond(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Vagabond è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Prophet':
            $pg= new Prophet(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Prophet è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        case 'Samurai':
            $pg= new Samurai(readline("inserisci un nome\n"),readline("inserisci il genere\n"),readline("Scegli un dono\n"));
            echo "Il tuo personaggio $pg->name di classe Samurai è stato creato con successo\n";
            return $pgs[]=$pg;
            break;
        
        default:
            echo "Non hai inserito un personaggio valido";
            break;
    }
}

function viewPgs(){
    global $pgs;
    $app=readline("Inserisci il nome del tuo personaggio: ");
    for($i=0;$i<count($pgs);$i++){
    
        if($pgs[$i]->name==$app){
        
        $pgs[$i]->pgStat();
    }
    }
}

function viewNames(){
    global $pgs;
    for($i=0;$i<count($pgs); $i++){
        print_r($pgs[$i]->name);
    }
}

// do{
//     if(menu()!=0){
//         continue;
//     } else break;
// }while(!0);

menu();