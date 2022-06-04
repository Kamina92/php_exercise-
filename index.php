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

// $nums=[0, 0, 0, 0, 0, 0, 0];

// function duplicates($array){
//     $pairs=0;
//     $unique=array_values(array_unique($array));
//     for($i=0; $i<count($unique);$i++){
//         $toFilt=$unique[$i];
//         $app=array_filter($array,function($value) use($toFilt) {
//             return $value==$toFilt;
//         });

//         if(count($app)>=2){
//             $pairs+=round((count($app)/2),0,PHP_ROUND_HALF_DOWN);
//         };
//     }

//     return $pairs;
// }

// print_r(duplicates($nums));

// Jaden Smith, the son of Will Smith, is the star of films such as The Karate Kid (2010) and After Earth (2013). Jaden is also known for some of his philosophy that he delivers via Twitter. When writing on Twitter, he is known for almost always capitalizing every word. For simplicity, you'll have to capitalize each word, check out how contractions are expected to be in the example below.

// Your task is to convert strings to how they would be written by Jaden Smith. The strings are actual quotes from Jaden Smith, but they are not capitalized in the same way he originally typed them.

// Example:

// Not Jaden-Cased: "How can mirrors be real if our eyes aren't real"
// Jaden-Cased:     "How Can Mirrors Be Real If Our Eyes Aren't Real"


// function toJadenCase($string) 
// {
//    $arr=explode(' ',$string);
//    $app=[];
//    foreach($arr as $el){
//         $el=ucfirst($el);
//         $app[]=$el;
//     }
    
//     $app=implode(' ',$app);

//     return $app;
// }

// toJadenCase("How can mirrors be real if our eyes aren't real");

// Description
// You are Saitama (a.k.a One Punch Man), and you are fighting against the monsters! You are strong enough to kill them with one punch, but after you punch 3 times, one of the remaining monsters will hit you once.

// Your health is health; number of monsters is monsters, damage that monster can give you is damage.

// Task
// Write a function that will calculate:

// how many hits you received, how much damage you received and your remaining health.

// if your health is <= 0, you die and function should return "hero died".

// Examples
// (100, 3, 33)  => "hits: 0, damage: 0, health: 100"
// ( 50, 7, 10)  => "hits: 2, damage: 20, health: 30"
// Note
// All numbers are strictly positive. Your function should always return a string.

// Have fun :)

// function killMonsters($h, $m, $dm) {
//     if($m<=3){
//         $a="hits: 0, damage: 0, health: $h";
//         return $a;
//     } elseif($m%3==0){
//         $m=$m-1;
//     }

    

//     $hits=floor(($m/3));
    
//     $damage= $hits*$dm;

//     $h=$h-$damage;

//     if($h<=0){
//         $a="hero died";
//         return $a;
//     } else {
//         $b="hits: $hits, damage: $damage, health: $h";
//         return $b;
//     }

//   }
//  echo(killMonsters(20000,9,10));

// Given two words and a letter, return a single word that's a combination of both words, merged at the point where the given letter first appears in each word. The returned word should have the beginning of the first word and the ending of the second, with the dividing letter in the middle. You can assume both words will contain the dividing letter.

// Examples
// ("hello", "world", "l")       ==>  "held"
// ("coding", "anywhere", "n")   ==>  "codinywhere"
// ("jason", "samson", "s")      ==>  "jasamson"
// ("wonderful", "people", "e")  ==>  "wondeople"

// function stringMerge($string1, $string2, $letter) {

//     $pos1=strpos($string1,$letter);
//     $pos2=strpos($string2,$letter);


//     $string1=substr($string1,0,$pos1);
//     $string2=substr($string2,$pos2+1);

//     $final = $string1 . $letter . $string2;
//     return $final;

// }

// print_r(stringMerge("hello", "world", "l"));


// Complete the function that takes one argument, a list of words, and returns the length of the longest word in the list.

// For example:

// ['simple', 'is', 'better', 'than', 'complex'] ==> 7
// Do not modify the input list.

// function longest($words) {
//     $length=0;

//     foreach($words as $word){
//         if($length<strlen($word)){
//             $length=strlen($word);
//         }
//     }

//     return $length;

//   }

//   print_r(longest(['simple', 'is', 'better', 'than', 'complex']));

// Given a random string consisting of numbers, letters, symbols, you need to sum up the numbers in the string.

// Note:

// Consecutive integers should be treated as a single number. eg, 2015 should be treated as a single number 2015, NOT four numbers
// All the numbers should be treaded as positive integer. eg, 11-14 should be treated as two numbers 11 and 14. Same as 3.14, should be treated as two numbers 3 and 14
// If no number was given in the string, it should return 0
// Example:

// str = "In 2015, I want to know how much does iPhone 6+ cost?"
// The numbers are 2015, 6

// Sum is 2021.

// function sum_from_string($str){
//     preg_match_all('!\d+!', $str, $matches);

//     print_r($matches[0]);
//     return array_sum($matches[0]);
// }
// $str = "In 2015, I want to know how much does iPhone 6+ cost?";
// print_r(sum_from_string($str));


// Write a function that finds the sum of all its arguments.

// eg:

// sum(1, 2, 3) // => 6
// sum(8, 2) // => 10
// sum(1, 2, 3, 4, 5) // => 15


// function sum(...$numbers) {

//     return array_sum($numbers);
  
// }

// Given a number return the closest number to it that is divisible by 10.

// Example input:

// 22
// 25
// 37
// Expected output:

// 20
// 30
// 40

// function closest_multiple_10($n) {
//     if($n<10){
//         return 0;
//     }
//     $a="$n";
//     $a=str_split($a);
//     if($a[(count($a)-1)]>=5){
//         $final[]=$a[0]+1;
//     } else {
//         $final[]=$a[0];
//     }

//     for($i=1;$i<count($a);$i++){
//         $final[]=0;
//     }

//     $final=implode("",$final);

//     return $final;

// }

// print_r(closest_multiple_10(14.5));




// NON FINITO

// You are given two arrays a1 and a2 of strings. Each string is composed with letters from a to z. Let x be any string in the first array and y be any string in the second array.

// Find max(abs(length(x) − length(y)))

// If a1 and/or a2 are empty return -1 in each language except in Haskell (F#) where you will return Nothing (None).

// Example:
// a1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"]
// a2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"]
// mxdiflg(a1, a2) --> 13
// Bash note:
// input : 2 strings with substrings separated by ,
// output: number as a string

// function mxdiflg($a1, $a2) {
//    if($a1==[]||$a2==[]){
//        return -1;
//    }


// }


// In a factory a printer prints labels for boxes. For one kind of boxes the printer has to use colors which, for the sake of simplicity, are named with letters from a to m.

// The colors used by the printer are recorded in a control string. For example a "good" control string would be aaabbbbhaijjjm meaning that the printer used three times color a, four times color b, one time color h then one time color a...

// Sometimes there are problems: lack of colors, technical malfunction and a "bad" control string is produced e.g. aaaxbbbbyyhwawiwjjjwwm with letters not from a to m.

// You have to write a function printer_error which given a string will return the error rate of the printer as a string representing a rational whose numerator is the number of errors and the denominator the length of the control string. Don't reduce this fraction to a simpler expression.

// The string has a length greater or equal to one and contains only letters from ato z.

// Examples:
// s="aaabbbbhaijjjm"
// printer_error(s) => "0/14"

// s="aaaxbbbbyyhwawiwjjjwwm"
// printer_error(s) => "8/22"


// function printerError($s) {
//     $errors=['n','o','p','q','r','s','t','u','v','w','x','y','z'];

//     $len=strlen($s);
//     $final=str_replace($errors,"",$s);

//     $error=$len-strlen($final);

//     return "$error" . "/" . "$len";

// }

// print_r(printerError('aaabbbbhaijjjm'));


// Take 2 strings s1 and s2 including only letters from ato z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.

// Examples:
// a = "xyaabbbccccdefww"
// b = "xxxxyyyyabklmopq"
// longest(a, b) -> "abcdefklmopqwxy"

// a = "abcdefghijklmnopqrstuvwxyz"
// longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"


// function longest($a, $b) {
//     $final="$a" . "$b";
//     $final=str_split($final);
//     $final=array_unique($final);
//     sort($final);
//     $final=implode("",$final);
//     return $final;
// }

// $a = "xyaabbbccccdefww";
// $b = "xxxxyyyyabklmopq";

// longest($a,$b);

// The goal of this exercise is to convert a string to a new string where each character in the new string is "(" if that character appears only once in the original string, or ")" if that character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.

// Examples
// "din"      =>  "((("
// "recede"   =>  "()()()"
// "Success"  =>  ")())())"
// "(( @"     =>  "))((" 
// Notes
// Assertion messages may be unclear about what they display in some languages. If you read "...It Should encode XXX", the "XXX" is the expected result, not the input!

// function duplicate_encode($word){
// 	$final=[];
//     $arr=str_split(strtolower($word));
    
//     $unici= array_unique($arr);

//     foreach($arr as &$value){

//         $count=count(array_keys($arr,$value));
//         if($count>1){
//             $final[]=')';
//         }else {$final[]='(';}

//     }
   
//     return implode('',$final);


//     }


// print_r(duplicate_encode('recede'));


// Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

// Examples:

// * 'abc' =>  ['ab', 'c_']
// * 'abcdef' => ['ab', 'cd', 'ef']

// function solution($str) {

//     if($str==''){
//         return [];
//     }else{

//         $arr=str_split($str,2);

//         if(strlen($str)%2!=0){
//             $arr[count($arr)-1]=substr($str,-1).'_';
//         }
  
//     return $arr;
//     }
// }

// solution('abc');

// There is an array with some numbers. All numbers are equal except for one. Try to find it!

// findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
// findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
// It’s guaranteed that array contains at least 3 numbers.

// The tests contain some very huge arrays, so think about performance.

// function find_uniq($a) {
//     $i=1;
//         foreach($a as $num){
//             if($num==$a[$i]){
//                 $i++;
//             } elseif($i==1 && $num!=$a[$i+1]){
//                 return $num;
//             }else return $a[$i];
//         }
//   }

// function find_uniq($a) {
//     $unique=array_values(array_unique($a));
//     $str=implode(" ",$a);
//     return substr_count($str,$unique[0])==1 ? $unique[0]: $unique[1];

    
//   }
// function find_uniq($a) {
//     $unique=array_values(array_unique($a));
//     if(count(array_keys($a,$unique[0]))==1){
//         return $unique[0];
//     } else return $unique[1];
// //   }

//   print_r(find_uniq([87, 81, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87]));


// NON RISOLTO

// Define a function that takes an integer argument and returns a logical value true or false depending on if the integer is a prime.

// Per Wikipedia, a prime number ( or a prime ) is a natural number greater than 1 that has no positive divisors other than 1 and itself.

// Requirements
// You can assume you will be given an integer input.
// You can not assume that the integer will be only positive. You may be given negative numbers as well ( or 0 ).
// NOTE on performance: There are no fancy optimizations required, but still the most trivial solutions might time out. Numbers go up to 2^31 ( or similar, depending on language ). Looping all the way up to n, or n/2, will be too slow.
// Example
// is_prime(1)  /* false */
// is_prime(2)  /* true  */
// // is_prime(-1) /* false */
// function is_prime($n){
//     if($n==2||$n==3){
//         return true;
//     }elseif($n>3&&$n%2!=0 && $n%3!=0){
//         return true;
//     } else return false;
//   }

//   print_r(is_prime(1673039083));



//   Given two arrays a and b write a function comp(a, b) (orcompSame(a, b)) that checks whether the two arrays have the "same" elements, with the same multiplicities (the multiplicity of a member is the number of times it appears). "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.

// Examples
// Valid arrays
// a = [121, 144, 19, 161, 19, 144, 19, 11]  
// b = [121, 14641, 20736, 361, 25921, 361, 20736, 361]
// comp(a, b) returns true because in b 121 is the square of 11, 14641 is the square of 121, 20736 the square of 144, 361 the square of 19, 25921 the square of 161, and so on. It gets obvious if we write b's elements in terms of squares:

// a = [121, 144, 19, 161, 19, 144, 19, 11] 
// b = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19]
// Invalid arrays
// If, for example, we change the first number to something else, comp is not returning true anymore:

// a = [121, 144, 19, 161, 19, 144, 19, 11]  
// b = [132, 14641, 20736, 361, 25921, 361, 20736, 361]
// comp(a,b) returns false because in b 132 is not the square of any number of a.

// a = [121, 144, 19, 161, 19, 144, 19, 11]  
// b = [121, 14641, 20736, 36100, 25921, 361, 20736, 361]
// comp(a,b) returns false because in b 36100 is not the square of any number of a.

// Remarks
// a or b might be [] or {} (all languages except R, Shell).
// a or b might be nil or null or None or nothing (except in C++, COBOL, Crystal, D, Dart, Elixir, Fortran, F#, Haskell, Nim, OCaml, Pascal, Perl, PowerShell, Prolog, PureScript, R, Racket, Rust, Shell, Swift).
// If a or b are nil (or null or None, depending on the language), the problem doesn't make sense so return false.

// Note for C
// The two arrays have the same size (> 0) given as parameter in function comp.

// RISOLTO MA SU CODE WARS NON VA

// function comp($a, $b) {
//     if($a==[] || $b==[] || $a==null || $b==null){
//         return 'false';
//     }

//     if(count($a)==count($b) && count(array_unique($a))==count(array_unique($b))){

//         foreach($a as $num){
//             $app=array_search(pow($num,2),$b);
//             print_r($app);
//             if($app===false){
//                 return 'false';
//             }
        
//         }
//         return 'true';
//     }else return 'false';


// }

// $a = [4,4];
// $b = [4,4];

// print_r(comp($a,$b));

// You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

// Examples
// [7, 1]  =>  [1, 7]
// [5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
// [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]

// function sortArray($arr){
//     $odd=array_filter($arr,function($num){
//         return $num%2!=0;
//     });
//     $even=array_filter($arr,function($num){
//         return $num%2==0;
//     });
//     asort($odd);

//     $chiavi=array_keys($odd);
   
//     sort($chiavi);
   
//     $i=0;

//     $new=[];

//     foreach($odd as $key=>$value){

//         $new[$chiavi[$i]]=$value;
//         $i++;
//     }

//     $final=$new + $even;

//     ksort($final);
    
//    return $final;
    
// }

// sortArray([5, 8, 6, 3, 4]);

// Build Tower
// Build a pyramid-shaped tower given a positive integer number of floors. A tower block is represented with "*" character.

// For example, a tower with 3 floors looks like this:

// [
//   "  *  ",
//   " *** ", 
//   "*****"
// ]
// And a tower with 6 floors looks like this:

// [
//   "     *     ", 
//   "    ***    ", 
//   "   *****   ", 
//   "  *******  ", 
//   " ********* ", 
//   "***********"
// ]

// function tower_builder($n){
    
//     $tower=[];
    
//     for($i=1; $i<=$n;$i++){
//         if($i==1){
//             $tower[]='*';
//         }else{
//             $tower[]=$tower[$i-2].'**';
//         }
//     }

//     $lastFloorLeng=strlen($tower[count($tower)-1]);

//     foreach($tower as &$floor){
//         if (strlen($floor)<$lastFloorLeng){
//             $spaces=$lastFloorLeng-strlen($floor);
//             $floor= str_repeat(" ",(floor(($spaces/2)))).$floor.str_repeat(" ",(floor(($spaces/2))));
//         }
//     }

//     return $tower;
// }

// print_r(tower_builder(3));

// $t=str_repeat(" ",2).'*'.str_repeat(" ",2);

// Given an array (arr) as an argument complete the function countSmileys that should return the total number of smiling faces.

// Rules for a smiling face:

// Each smiley face must contain a valid pair of eyes. Eyes can be marked as : or ;
// A smiley face can have a nose but it does not have to. Valid characters for a nose are - or ~
// Every smiling face must have a smiling mouth that should be marked with either ) or D
// No additional characters are allowed except for those mentioned.

// Valid smiley face examples: :) :D ;-D :~)
// Invalid smiley faces: ;( :> :} :]

// Example
// countSmileys([':)', ';(', ';}', ':-D']);       // should return 2;
// countSmileys([';D', ':-(', ':-)', ';~)']);     // should return 3;
// countSmileys([';]', ':[', ';*', ':$', ';-D']); // should return 1;
// Note
// In case of an empty array return 0. You will not be tested with invalid input (input will always be an array). Order of the face (eyes, nose, mouth) elements will always be the same.

// function count_smileys($arr){
//     $eyes=[':',';'];
//     $nose=['-','~'];
//     $smile=[')','D'];
//     $test=[];
//     $count=0;
//     foreach($arr as $str){
//         if(strlen($str)==3){
//             $test[]=in_array($str[0],$eyes);
//             $test[]=in_array($str[1],$nose);
//             $test[]=in_array($str[2],$smile);
//             in_array('',$test) ? : $count++;
//             $test=[];
//         } elseif(strlen($str)==2){
//             $test[]=in_array($str[0],$eyes);
//             $test[]=in_array($str[1],$smile);  
//             in_array('',$test) ? : $count++; 
//             $test=[];
//         }

//     }

//     return $count;
// }

// print_r(count_smileys([':)',':(',':D',':O',':;']));

// You are given an array(list) strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.

// Examples:
// strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"], k = 2

// Concatenate the consecutive strings of strarr by 2, we get:

// treefoling   (length 10)  concatenation of strarr[0] and strarr[1]
// folingtrashy ("      12)  concatenation of strarr[1] and strarr[2]
// trashyblue   ("      10)  concatenation of strarr[2] and strarr[3]
// blueabcdef   ("      10)  concatenation of strarr[3] and strarr[4]
// abcdefuvwxyz ("      12)  concatenation of strarr[4] and strarr[5]

// Two strings are the longest: "folingtrashy" and "abcdefuvwxyz".
// The first that came is "folingtrashy" so 
// longest_consec(strarr, 2) should return "folingtrashy".

// In the same way:
// longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
// n being the length of the string array, if n = 0 or k > n or k <= 0 return "" (return Nothing in Elm).

// Note
// consecutive strings : follow one after another without an interruption


// function longestConsec($strarr, $k) {
//     if($strarr==[] || $k<=0 || $k>count($strarr)){
//         return "";
//     }
//     $count=0;
//     foreach($strarr as &$str){
//         for($i=1;$i<$k;$i++){
//             $str=$str.$strarr[$count+$i];
//         }
//         $count++;
//     }

//     $final=$strarr[0];
    
//     foreach($strarr as &$str){
//         if(strlen($final)<strlen($str)){
//             $final=$str;
//         }
//     }
    
//     return $final;

// }

// longestConsec(["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"],2);

// Write Number in Expanded Form
// You will be given a number and you will need to return it as a string in Expanded Form. For example:

// expanded_form(12); // Should return "10 + 2"
// expanded_form(42); // Should return "40 + 2"
// expanded_form(70304); // Should return "70000 + 300 + 4"
// NOTE: All numbers will be whole numbers greater than 0.

// function expanded_form($n){
//     $test=[];
//     $n=strval($n);
//     $n=str_split($n);
//     $nLeng=count($n)-1;
//     $count=0;
//     foreach($n as &$val){
//         if($val>0){
//             $zeros=$nLeng-$count;
//             for($i=1;$i<=$zeros;$i++){
//                 $val=$val.'0';
//             }
//             $test[]=$val;
//             $count++;
//         }else $count++;

//     }

//     $final=join(' + ',$test);

//     return $final;
// }

// print_r(expanded_form(70304));



// In this simple Kata your task is to create a function that turns a string into a Mexican Wave. You will be passed a string and you must return that string in an array where an uppercase letter is a person standing up. 
// Rules
//  1.  The input string will always be lower case but maybe empty.

//  2.  If the character in the string is whitespace then pass over it as if it was an empty seat
// Example
// wave("hello") => []string{"Hello", "hEllo", "heLlo", "helLo", "hellO"}

// function wave($people){
//     if($people==''){
//         return [];
//     }

//     $wave=str_split($people);

//     $final=[];

//     foreach($wave as &$char){
//         if($char!=' '){
//         $char=strtoupper($char);
//         $final[]=join('',$wave);
//         $char=strtolower($char);
//         }
//     }

//     return $final;
  
// }

// wave('hello');

// Write a function toWeirdCase (weirdcase in Ruby) that accepts a string, and returns the same string with all even indexed characters in each word upper cased, and all odd indexed characters in each word lower cased. The indexing just explained is zero based, so the zero-ith index is even, therefore that character should be upper cased and you need to start over for each word.

// The passed in string will only consist of alphabetical characters and spaces(' '). Spaces will only be present if there are multiple words. Words will be separated by a single space(' ').

// Examples:
// toWeirdCase("String"); // => returns "StRiNg"
// toWeirdCase("Weird string case"); // => returns "WeIrD StRiNg CaSe"

// function toWeirdCase($string) {
//     $arr=explode(' ',$string);
//     foreach($arr as &$string){
//         $len=strlen($string);
//         for ($i=0; $i <$len ; $i++) { 
//             if($i==0|| $i%2==0){
//                 $string[$i]=strtoupper($string[$i]);
//             }else $string[$i]=strtolower($string[$i]);
//         }

//     }
//     return join(' ',$arr);;
// }

// toWeirdCase('WeIrD StRiNg CaSe');

// Take an array and remove every second element from the array. Always keep the first element and start removing with the next element.

// Example:

// ["Keep", "Remove", "Keep", "Remove", "Keep", ...] --> ["Keep", "Keep", "Keep", ...]

// None of the arrays will be empty, so you don't have to worry about that!

function removeEveryOther($array) {
    $count=1;
    foreach($array as &$el){
        if($count>0 && $count%2!=0){
            unset($array[$count]);
        }
        $count++;
    }

    print_r($array);
    return $array;
}

removeEveryOther(["Keep", "Remove", "Keep", "Remove", "Keep"]);

?>