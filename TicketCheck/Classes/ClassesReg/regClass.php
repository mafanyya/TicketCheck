<?php

namespace Registration;

class regClass
{
    public function reggClass(){
        echo ("Choose a class").PHP_EOL;
        $class = fgets(STDIN);
        $newclass = new regClass();
        $newclass->regClass($class);
    }

    function regClass($class){

        if($class != 1 & $class != 2){
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggClass();
        }

    }
}