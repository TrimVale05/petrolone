<?php

  //prelevami i dati inviati dalla pagina inserisciManutenzione.php
global $conn;
    $username= $_POST['username'];
    $password= $_POST['password'];

    include './DB/connect.php';

    //creao la query per inserire i dati nel database
    $sql = "SELECT username, pwd FROM utenti WHERE username = '$username' AND pwd = '$password'";

    //eseguo la query
    if ($conn->query($sql)) {
        if ($conn->num_rows = 1) {

        } else {
            echo "0 results";
        }

    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }

    //chiudo la connessione
    $conn->close();

?>
