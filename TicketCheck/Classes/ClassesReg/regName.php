<?php

namespace Registration;

class regName
{
    public function reggName(){
        echo ("Enter your name:").PHP_EOL;
        $name = fgets(STDIN);
        $newname = new regName();
        $newname->regName($name);
        return $name;
    }
    public function regName($name){

        if (preg_match("/[a-z-]/",$name)){
            echo ("+").PHP_EOL;
            return $name;
        }
        else{
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggName();
        }
    }

}