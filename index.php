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

// $num1= 1;
// $num2= 2;
// $num3= 3;
// $num4= 4;
// $num5= 5;
// $num6= 6;

// function sum(...$numbers){
   
//     $total= array_reduce($numbers,function($total,$number){
//         $total+=$number;
//         return $total;
//     });
//     echo ("$total");
//     return true;
// }

// sum($num1,$num2,$num3,$num4,$num5,$num6);



// $test=str_contains("samurai", "Tai");

// var_dump($test);


// Write a method, that will get an integer array as parameter and will process every number from this array.

// Return a new array with processing every number of the input-array like this:

// If the number has an integer square root, take this, otherwise square the number.

// Example
// [4,3,9,7,2,1] -> [2,9,3,49,4,1]
// Notes
// The input array will always contain only positive numbers, and will never be empty or null.


// $arr=[4,3,9,7,2,1];

// foreach ($arr as &$el) {

//     if(sqrt($el)==intval(sqrt($el))){
//         $el= sqrt($el);
//     }else{
//         $el= $el*$el;
//     }
    
// }

// var_dump($arr);

// If you can't sleep, just count sheep!!

// // Task:
// // Given a non-negative integer, 3 for example, return a string with a murmur: "1 sheep...2 sheep...3 sheep...". Input will always be valid, i.e. no negative integers.

// function countsheep($num){
//     $a=[];
//     for($i=1;$i<=$num;$i++){
//         $a[]="$i sheep...";
//     }

//     return implode($a);
// }

// print_r(countsheep(2));

// Given a number n, return the number of positive odd numbers below n, EASY!

// Examples (Input -> Output)
// * 7  -> 3 (because odd numbers below 7 are [1, 3, 5])
// * 15 -> 7 (because odd numbers below 15 are [1, 3, 5, 7, 9, 11, 13

// function oddCount($n) {
// $count=0;

// for($i=1;$i<$n; $i++){
//     if($i%2!=0){
//         $count++;
//     }
// }

// return $count;

// }

// print_r(oddCount(1500344555421232123212331));

// function dont_give_me_five($start, $end) {

//     $count=0;
//     for($i=$start; $i<=$end; $i++){
//         $i="$i";
//         if(!preg_match("/5/",$i)){
//             $count++;
//         }
//     }

//     return $count++;
// }

// print_r(dont_give_me_five(1,9));

// Given an input of an array of digits, return the array with each digit incremented by its position in the array: the first digit will be incremented by 1, the second digit by 2, etc. Make sure to start counting your positions from 1 ( and not 0 ).

// Your result can only contain single digit numbers, so if adding a digit with its position gives you a multiple-digit number, only the last digit of the number should be returned.

// Notes:
// return an empty array if your array is empty
// arrays will only contain numbers so don't worry about checking that


// function incrementer($nums) {
//     $final=[];
//     if($nums!=[]){
//         foreach($nums as $key=>$value){

//             $app=$nums[$key]+$key+1; 
//             echo "$app";
//             if($app>=10){
//                 $app="$app";
//                 $app=substr($app,-1);
//                 $app=intval($app);
//                 echo "$app";
//                 $final[]=$app;
//             }else {$final[]=$nums[$key]+$key+1;}
//         };
//     }
//     return $final;
//   }
// //   incrementer([4, 6, 7, 1, 3]);
//   print_r(incrementer([4, 6, 7, 1, 3]));



// Implement the method lastIndexOf (last_index_of in PHP and Python), which accepts a linked list (head) and a value, and returns the index (zero based) of the last occurrence of that value if exists, or -1 otherwise.

// For example: Given the list: 1 -> 2 -> 3 -> 3, and the value 3, lastIndexOf / last_index_of should return 3.

// // The linked list is defined as follows:
// class Node {
//     public $data, $next;
//     public function __construct($data, $next = NULL) {
//       $this->data = $data;
//       $this->next = $next;
//     }
//   };


// //   Note: the list may be null/None and can hold any type of value.

// //   Good luck!


// // function last_index_of($head, $value) {
// //     return -1;
// //   }

// $a= new Node(1, new Node(2, new Node(3)));

// $b=get_mangled_object_vars($a);

// var_dump($b);

// You are given array of integers, your task will be to count all pairs in that array and return their count.

// Notes:

// Array can be empty or contain only one value; in this case return 0
// If there are more pairs of a certain number, count each pair only once. E.g.: for [0, 0, 0, 0] the return value is 2 (= 2 pairs of 0s)
// Random tests: maximum array length is 1000, range of values in array is between 0 and 1000
// Examples
// [1, 2, 5, 6, 5, 2]  -->  2
// ...because there are 2 pairs: 2 and 5

// [1, 2, 2, 20, 6, 20, 2, 6, 2]  -->  4
// ...because there are 4 pairs: 2, 20, 6 and 2 (again)

$nums=[0, 0, 0, 0, 0, 0, 0];

function duplicates($array){
    $pairs=0;
    $unique=array_values(array_unique($array));
    for($i=0; $i<count($unique);$i++){
        $toFilt=$unique[$i];
        $app=array_filter($array,function($value) use($toFilt) {
            return $value==$toFilt;
        });

        if(count($app)>=2){
            $pairs+=round((count($app)/2),0,PHP_ROUND_HALF_DOWN);
        };
    }

    return $pairs;
}

print_r(duplicates($nums));



// ?>