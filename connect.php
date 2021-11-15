<?php
namespace TicketCheck;

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'ticketcheck';
$connect = mysqli_connect($hostname,$username,$password,$database);

var_dump($connect);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($connect);