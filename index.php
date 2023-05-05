<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<?php

$passwordLength = $_GET["length"];
var_dump($_GET);

function password_generator($length)
{
    $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";

    var_dump(substr(str_shuffle($characters), 0, $length));

    return substr(str_shuffle($characters), 0, $length);

    // $lowerCaseChar= "abcdefghijklmnopqrstuvwxyz"; 
    // $upperCaseChar= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // $numbers = '0123456789';
    // $symbols ="$%&\=?!"
}
;

password_generator($passwordLength)

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<title>Strong Password Generator</title>
</head>

<body>

    <form method="get">
        <div class="mb-3">
            <label for="length" class="form-label">Enter the length of the password (Max 70)
            </label>
            <input type="number" class="form-control" name="length" id="length" placeholder="Enter the length of the password (max 70)
">
            <button type="submit" class="btn btn-primary">Enter</button>
        </div>
    </form>

</body>

</html>