<?php

$psw= readline("Inserire una password con almeno:\n-8 caratteri\n-un carattere maiuscolo\n-almeno un numero\n-almeno un carattere speciale tra i seguenti:@!#?\nPassword:");



// Funzione di verifica lughezza password

function pswLength($pass){
    if(strlen($pass)>=8){
        return true; 
    }
    return false;
}

// Funzione di verifica carattere maiuscolo password


function isUpperCase($pass){
    for($i=0; $i<strlen($pass); $i++){
        if(ctype_upper($pass[$i])){
            return true;
        }
    }
    return false;
}

// Funzione di verifica presenza  numero


function is_Number($pass){

    for($i=0; $i<strlen($pass); $i++){
        if(is_numeric($pass[$i])){
            return true;
        }
    }
    return false;

}

// Funzione di verifica carattere speciale



function is_specialChar($pass){
    $special=["@","!","#","?"];

    for($i=0; $i<strlen($pass); $i++){
        if(in_array($pass[$i],$special)){
            return true;
        }
    }
    return false;

}

// funzione di validazione password completa con richiamo alle altre funzioni


function validPassword($password){
    $lungPass=pswLength($password);
    $upperChar=isUpperCase($password);
    $numChar=is_Number($password);
    $specialChar=is_specialChar($password);

    if($lungPass && $upperChar && $numChar && $specialChar){
        echo "La password $password è valida";
        return true;
    }

    return false;

}

// programma di inserimento e validazione password che permette fino a 3 tentativi

$countTries=0;


while($countTries<3 && !validPassword($psw)){

    if(validPassword($psw)){
        break;
    }else if($countTries>=0 && $countTries<2){
        echo "La password inserita non è valida,riprovare\n";
        $countTries++;
        $psw= readline("Inserire una password con almeno:\n-8 caratteri\n-un carattere maiuscolo\n-almeno un numero\n-almeno un carattere speciale tra i seguenti:@!#?\nPassword:");
    } else if($countTries==2){
        echo "3 tentativi errati riprovare più tardi";
        break;
    }
}

