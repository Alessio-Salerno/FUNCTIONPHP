<?php

// REGOLE
// 1 - PASSWORD CHE SIA LUNGA 8 CARATTERI
// 2 - PASSWORD CHE CONTENGA UN NUMERO
// 3 - PASSWORD CHE CONTENGA ALMENO UN CARATTERE MAIUSCOLO
// 4 - PASSWORD CHE CONTENTA ALMENO UN CARATTERE SPECIALE

// $password = readline("Inserisci la tua password : \n");

//  PASSWORD CHE SIA LUNGA 8 CARATTERI

function checkLunghezza($stringa){
    if(strlen($stringa) >= 8){
        return true;
    }
    else{
        echo "La password deve contenere almeno 8 caratteri \n";
        return false;
    }
}

// VARIABILE DI APPOGGIO PER TEST

// $first_rule = checkLunghezza($password);


// PASSWORD CHE CONTENGA ALMENO UN CARATTERE MAIUSCOLO

function checkUpper($stringa){
    for ($i=0; $i <strlen($stringa); $i++) { 

        if(ctype_upper($stringa[$i])){
            return true;
        }
    }
    echo "Manca la lettera maiuscola \n";
    return false;
}

// $second_rule = checkUpper($password);


// PASSWORD CHE CONTENGA UN NUMERO


function Number($stringa){
 for ($i=0; $i < strlen($stringa) ; $i++) { 
    if (is_numeric($stringa[$i])) {
        return true;
    }
 }
   echo "Devi inserire un numero \n";
   return false;

}

// $third_rule = Number($password);




// PASSWORD CHE CONTENTA ALMENO UN CARATTERE SPECIALE


function checkSpecial($stringa){

    $specialChars = ["!" , "@", "#" , "?" ];


   for ($i=0; $i < strlen($stringa) ; $i++) { 
    
    if(in_array($stringa[$i] , $specialChars)){
       return true;

    }

   }

   echo "Almeno un carattere speciale \n";
   return false;
}

// $fouth_rule = checkSpecial($password);


function password($stringa){
    $first_rule = checkLunghezza($stringa);
    $second_rule = checkUpper($stringa);
    $third_rule = Number($stringa);
    $fourth_rule = checkSpecial($stringa);

    
   if ($first_rule && $second_rule && $third_rule && $fourth_rule) {
       echo "Password Accettata! \n";

   }
    return $first_rule && $second_rule && $third_rule && $fourth_rule;
}

$password = readline("Scrivi la tua password \n");
// var_dump(password($password));



do {
    $password = readline("Scrivi la tua password \n");

} while(!Password($password));


?>
