<?php

namespace Registration;

class regNum
{

    public function reggNumU(){
        echo("Number of people (preferential tariff)").PHP_EOL;
        $PNU = fgets(STDIN);


        $newNumU = new regNum();
        $newNumU -> regNumU($PNU);

    }
    public function reggNumN(){
        echo("Number of people (normal tariff)").PHP_EOL;
        $PNN = fgets(STDIN);

        $newNumN = new regNum();
        $newNumN ->regNumN($PNN);


    }
    public function regNumN($PNN){

        if (preg_match("/[0-9]/",$PNN)){
            echo ("+").PHP_EOL;
        }
        else{
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggNumN();
        }

    }
    public function regNumU($PNU){

        if (preg_match("/[0-9]/",$PNU)){
            echo ("+").PHP_EOL;
        }
        else{
            echo("Error, please enter the correct value").PHP_EOL;
           $this->reggNumU();
        }

    }


}