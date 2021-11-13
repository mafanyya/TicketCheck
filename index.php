<?php
require __DIR__ . "/vendor/autoload.php";
require_once "connect.php";

function menu()
{
    echo ("Welcome to the TicketCheck program! How we can help you??
1) Ticket registration;
2) Checking the ticket;
(enter value (1,2)") . PHP_EOL;


    $TD = fgets(STDIN);
    switch ($TD) {
        case 1:
            ///РЕГИСТРАЦИЯ БИЛЕТА
            echo ("---TICKET REGISTRATION---") . PHP_EOL;


            ////SURNAME////

            $newSurname = new \Registration\RegSurname();
            $newSurname->regSurname();
            $newSurname->getSurname();



            ////NAME////

            $newName = new \Registration\RegName();
            $newName->regName();
            $newName->getName();


            ////GENDER////

            $newGender = new \Registration\RegGender();
            $newGender->regGender();
            $newGender->getGender();


            ////DATE////

            $newDate = new \Registration\RegDate();
            $newDate->regDate();
            $newDate->getDate();

            ////TRAIN////

            $newTrain = new \Registration\RegTrain();
            $newTrain -> regTrain();
            $newTrain -> getTrain();


            ////SEAT////

           $newSeat = new \Registration\RegSeat();
           $newSeat -> regSeat();
           $newSeat ->getSeat();

           ////DISCOUNT////

        $newDiscount = new \Registration\RegDiscount();
        $newDiscount ->isDiscount();
        $newDiscount ->getDiscount();



            echo("
            Surname: $newSurname
            Name: $newName
            Date: $newDate
            Gender: $newGender
            Train: $newTrain
            Seat: $newSeat
            Discount: $newDiscount
            ");

            break;
        case 2:
            ///ПРОВЕРКА БИЛЕТА
            echo "prow";
            break;
        default:
            ///ДРУГОЙ ОТВЕТ
            echo "Error, please enter the correct value " . PHP_EOL;
            menu();
    }
}

menu();



