<?php

// SCRIVERE UN PROGRAMMA CHE CALCOLI LA MEDIA DI UN ARRAY DI NUMERI INTERI, CONSIDERANDO SOLO I NUMERI DIVISIBILI PER 2

// $numbers = [1,2,3,4,5,6,7,8,9,10];

// $avarege = 0;

// $counter = 0;


// foreach ($numbers as $number) {
//     if($number % 2==0){
//         $avarege=$number + $avarege;
//         $counter++;
//     }
// }

// $final =$avarege/$counter;
// echo ("$final");



// Creare un array di persone con nome, cognome e genere. Se il genere e’ M stampare “Buongiorno Sig.” e se e’ F stampare “Buongiorno Sig.ra”

// $people = [
//     "name" => "Filippo",
//     "surname" => "DR",
//     "gender" => "F",
// ];

// if ($people["gender"]=="M") {
//     echo "Buongiono Sig $people[name]";
// } else {
//     echo "Buongiono Sig.ra $people[name]";
// }

// Scrivere un codice che cacoli il BMI (indice di massa corporea) e che mi dia in console i risultati. BMI= peso in kg / statura in metri al quadrato

// $heigth= 1.80;
// $weigth= 100;

// $BMI= $weigth/ ($heigth*$heigth);

// switch ($BMI) {
//     case ($BMI < 16.5): echo "Il tuo BMI è $BMI sei nella categoria Sottopeso severo";
//         break;
//     case ($BMI < 18.4 && $BMI >16.5): echo "Il tuo BMI è $BMI sei nella categoria Sottopeso";
//         break;
//     case ($BMI < 24.9 && $BMI >18.4): echo "Il tuo BMI è $BMI sei nella categoria Normale";
//         break;
//     case ($BMI < 30 && $BMI >25): echo "Il tuo BMI è $BMI sei nella categoria Sovrappeso";
//         break;
//     case ($BMI < 34.9 && $BMI >30.1): echo "Il tuo BMI è $BMI sei nella categoria Obesità primo grado";
//         break;
//     case ($BMI < 40 && $BMI >35): echo "Il tuo BMI è $BMI sei nella categoria Obesità secondo grado";
//         break;
//     case ($BMI > 40): echo "Il tuo BMI è $BMI sei nella categoria Obesità terzo grado";
//         break;
    
//     default: echo "valore non corretto";
        
//         break;
// }





// - Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY43”;

// for ($i=1; $i<=100 ; $i++) { 
//     if($i%3 == 0 && $i%5 == 0){
//         echo "HACKADEMY43 \n";
//     } else if ($i%5 == 0){
//         echo "JAVASCRIPT \n";
//     } else if ($i%3 == 0){
//         echo "PHP \n";
//     } else {
//         echo "$i \n";
//     }
// }


// SOMMATORIA DI NUMERI CON SPLAT OPERATOR

$num1= 1;
$num2= 2;
$num3= 3;
$num4= 4;
$num5= 5;
$num6= 6;

function sum(...$numbers){
   
    $total= array_reduce($numbers,function($total,$number){
        $total+=$number;
        return $total;
    });
    echo ("$total");
    return true;
}

sum($num1,$num2,$num3,$num4,$num5,$num6);

?>