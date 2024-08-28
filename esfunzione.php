<?php
// ESERCIZIO PASSWORD FUNZIONE

// REGOLE
// 1 - PASSWORD CHE SIA LUNGA 8 CARATTERI
// 2 - PASSWORD CHE CONTENGA UN NUMERO
// 3 - PASSWORD CHE CONTENGA ALMENO UN CARATTERE MAIUSCOLO
// 4 - PASSWORD CHE CONTENTA ALMENO UN CARATTERE SPECIALE


$password = readline("Inserisci la password: \n");

echo "Password inserita: " . $password . "\n";

// 1 - PASSWORD CHE SIA LUNGA ALMENO 8 CARATTERI
function checkLunghezza($pwd) {
    if(strlen($pwd) >= 8) {
        echo "La password è lunga almeno 8 caratteri \n";
        return true;
    } else {
        echo "La password deve essere lunga almeno 8 caratteri \n";
        return false;
    }
}

// 2 - PASSWORD CHE CONTENGA UN NUMERO
function checkNumber($pwd) {
    for ($i = 0; $i < strlen($pwd); $i++) { 
        if(is_numeric($pwd[$i])) {
            echo "La tua password contiene un numero \n";
            return true;
        }
    }
    echo "La password deve contenere almeno un numero \n";
    return false;
}
 
// 3 - PASSWORD CHE CONTENGA ALMENO UN CARATTERE MAIUSCOLO
function checkUpperCase($pwd) {
    for ($i = 0; $i < strlen($pwd); $i++) { 
        if(ctype_upper($pwd[$i])) {
            echo "La password contiene un carattere maiuscolo \n";
            return true;
        }
    }
    echo "La password deve contenere almeno un carattere maiuscolo \n";
    return false;
}

// 4 - PASSWORD CHE CONTENGA ALMENO UN CARATTERE SPECIALE
const SPECIAL_CHARS = ["!", "@", "#"];

function checkSpecialChar($pwd) {
    for ($i = 0; $i < strlen($pwd); $i++) { 
        if(in_array($pwd[$i], SPECIAL_CHARS)) {
            echo "La password contiene un carattere speciale \n";
            return true;
        }
    }
    echo "La password deve contenere almeno un carattere speciale \n";
    return false;
}

// Funzione principale per controllare la password
function checkPassword($pwd) {
    $first_rule = checkLunghezza($pwd);
    $second_rule = checkNumber($pwd);
    $third_rule = checkUpperCase($pwd);
    $fourth_rule = checkSpecialChar($pwd);

    if($first_rule && $second_rule && $third_rule && $fourth_rule) {
        echo "Password Accettata \n";
    } else {
        echo "Password Non Accettata \n";
    }
}

// Verifica della password
checkPassword($password);














?>