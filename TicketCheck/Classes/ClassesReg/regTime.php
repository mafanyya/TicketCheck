<?php

namespace Registration;

class regTime
{
    function checktimeD($hourD, $minD)
    {
        if ($hourD < 0 || $hourD > 23 || !is_numeric($hourD)) {
            return false;
        }
        if ($minD < 0 || $minD > 59 || !is_numeric($minD)) {
            return false;
        }

        return true;
    }


    function checktimeA($hourA, $minA)
    {
        if ($hourA < 0 || $hourA > 23 || !is_numeric($hourA)) {
            return false;
        }
        if ($minA < 0 || $minA > 59 || !is_numeric($minA)) {
            return false;
        }

        return true;
    }

    public function reggDepartureTime()
    {
        echo ("Enter departure time:") . PHP_EOL;

        echo ("Hour:") . PHP_EOL;
        $hourD = (int)fgets(STDIN);

        echo ("Minutes:") . PHP_EOL;
        $minD = (int)fgets(STDIN);

        $newTimeD = new regTime();
        $newTimeD->regDepartureTime($hourD, $minD);


    }

    public function regDepartureTime($hourD, $minD)
    {
        if ($this->checktimeD($hourD, $minD) == true) {
            echo("+").PHP_EOL;
        } else {
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggDepartureTime();
        }
    }

    public function reggArriveTime()
    {
        echo ("Enter arrive time") . PHP_EOL;

        echo ("Hour:") . PHP_EOL;
        $hourA = (int)fgets(STDIN);

        echo ("Minutes:") . PHP_EOL;
        $minA = (int)fgets(STDIN);

        $newTimeA = new regTime();
        $newTimeA->regArriveTime($hourA, $minA);
    }


    public function regArriveTime($hourA, $minA)
    {
        if ($this->checktimeA($hourA, $minA) == true) {
            echo("+").PHP_EOL;
        } else {
            echo("Error, please enter the correct value").PHP_EOL;
            $this->reggArriveTime();
        }
    }
}
