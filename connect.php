<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'user';

$connection = new mysqli($hostname, $username, $password, $database);

if(mysqli_connect_errno()) {
    die(mysqli_connect_error());
}