<?php
namespace TicketCheck;

require __DIR__ . "/vendor/autoload.php";

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'ticketcheck';
$connect = mysqli_connect($hostname,$username,$password,$database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


function menu($connect)
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

            ////INSERT PASSENGER DATA////

            $passenger= "INSERT INTO passengers (Last_Name,First_Name,Gender) VALUES ('$newSurname', '$newName', '$newGender')";

            if(mysqli_query($connect, $passenger)){
                echo "...";
            } else{
                echo "ERROR: Could not able to execute $passenger. " . mysqli_error($connect);
            }
            $selectId= "SELECT MAX(Passenger_id) FROM passengers";
            $passenger_id = mysqli_query($connect,$selectId);

            $row = mysqli_fetch_assoc($passenger_id);


            $passenger_id = $row['MAX(Passenger_id)'];


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

            $booking= "INSERT INTO booking (Train_Nr, Passenger_ID, Date, Discount_ID, Seat) 
            VALUES ('$newTrain', '$passenger_id', '$newDate','$newDiscount','$newSeat')";

            if(mysqli_query($connect, $booking)){
                echo "Registration completed successfully.
                
               
                ";
            } else{
                echo "ERROR: Could not able to execute $booking. " . mysqli_error($connect);
            }
            break;
        case 2:
            ///ПРОВЕРКА БИЛЕТА
            echo "prow";
            break;
        default:
            echo "Error, please enter the correct value " . PHP_EOL;
            menu($connect);
    }
}

menu($connect);



