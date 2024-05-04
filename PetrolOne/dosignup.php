<?php

  //prelevami i dati inviati dalla pagina inserisciManutenzione.php
global $conn;
$username= $_POST['username'];
    $password= $_POST['password'];
	$azienda= $_POST['azienda'];
    $indirizzo= $_POST['indirizzo'];
	$partitaIva= $_POST['iva'];

    include './DB/connect.php';

    $sql1 = "SELECT username, pwd FROM utenti WHERE username = '$username' AND pwd = '$password'";

    //eseguo la query per controllare se l'utente esiste gia'
    if ($conn->query($sql1)) {
        if ($conn->num_rows > 0) {
            // da aggiungere contenuti che informano l'utente dell'esistenza dell'altro account e un tasto per tornare al login.
            $conn->close();
        } else {
            $sql2 = "INSERT INTO utenti (username, pwd, nome_azienda, indirizzo, partita_iva)
            VALUES ('$username', '$password', '$azienda', '$indirizzo', '$partitaIva')";

            //eseguo la query
            if ($conn->query($sql2)) {
                $conn->close();
                header("location: ./home.html");
            } else {
                echo "Errore: " . $sql2 . "<br>" . $conn->error;
                $conn->close();
            }
        }

    } else {
        echo "Errore: " . $sql1 . "<br>" . $conn->error;
    }

?>
