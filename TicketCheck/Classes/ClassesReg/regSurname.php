<?php

namespace Registration;

class regSurname
{


public function reggSurname(){
    echo ("Enter your surname").PHP_EOL;
    $surname = fgets(STDIN);

    $newsurname = new regSurname();
    $newsurname->regSurname($surname);
    return $surname;


}
    public function regSurname($surname){


        if (preg_match("/[a-z-]/",$surname)){


        }
        else{
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggSurname();
        }
    }

}