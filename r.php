<?php
session_start();

require_once "connect.php";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0){
  echo "error: ";
} else{

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";

    if($result = @$polaczenie->query($sql)){
        $ilu_userow = $result->num_rows;
        if($ilu_userow>0){
                $wiersz = $result->fetch_assoc();
                $_SESSION['user'] = $wiersz['user'];

                $result->free_result();

                echo $user;



        } else{

        }
    }

    $polaczenie->close();
}











?>