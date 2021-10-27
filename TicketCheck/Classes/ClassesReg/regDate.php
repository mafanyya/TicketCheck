<?php

namespace Registration;

class regDate
{

    public function reggDate(){
        echo("Enter date:").PHP_EOL;

        echo("Day:").PHP_EOL;
        $day = (int)fgets(STDIN);

        echo("Month:").PHP_EOL;
        $month = (int)fgets(STDIN);

        echo("Year:").PHP_EOL;
        $year = (int)fgets(STDIN);

        $newDate = new regDate();
        $newDate->regDate($month,$day,$year);
    }
    public function regDate($month, $day, $year){


        if (checkdate($month,$day,$year)==true){

            echo("+");
        }
        else{
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggDate();
        }
    }

}