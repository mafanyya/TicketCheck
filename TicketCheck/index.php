<?php
require __DIR__."/vendor/autoload.php";

$connect = mysqli_connect('localhost','root','root','ticketcheck');
mysqli_set_charset($connect,"utf-8");

function menu()
{
    echo ("Welcome to the TicketCheck program! How can we help?
    1) Ticket registration;
    2) Checking the ticket;
    (enter value (1,2)").PHP_EOL;


$TD = fgets(STDIN);
    switch ($TD){
        case 1:
            ///РЕГИСТРАЦИЯ БИЛЕТА
            echo ("---TICKET REGISTRATION---").PHP_EOL;
            ////SURNAME////

            $newSurname = new \Registration\regSurname();
            $newSurname->reggSurname();


            ////NAME////

            $newName = new \Registration\regName();
            $newName->reggName();
            $name = $newName->regName($name);

            ////DATE////

            $newDate = new \Registration\regDate();
            $newDate->reggDate();


            ////DEPARTURE TIME////

            $newTimeD = new \Registration\regTime();
            $newTimeD->reggDepartureTime();


            ////ARRIVE TIME////

            $newTimeA = new \Registration\regTime();
            $newTimeA->reggArriveTime();


            ////NORMAL TARIFF////



            $newPNN = new \Registration\regNum();
            $newPNN ->reggNumN();


            ////PREFERENTIAL TARIFF////



            $newPNU = new \Registration\regNum();
            $newPNU ->reggNumU();


            ////CLASS////

            $newClass = new \Registration\regClass();
            $newClass ->reggClass();

            $query = "INSERT INTO tickets(surname,name,date,timeDeparture,timeArrive,normalTariff,preferentialTariff,class,number) VALUE ($surname,$name,$date,$timeD,$timeA,$PNN,$PNU,$class,$number)";
            $query_connect = mysqli_query($connect,$query);




            break;
        case 2:
            ///ПРОВЕРКА БИЛЕТА
            echo "prow";
            break;
        default:
            ///ДРУГОЙ ОТВЕТ
            echo "Error, please enter the correct value (1,2)".PHP_EOL;
            menu();
    }
}
menu();



