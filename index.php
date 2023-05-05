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
session_start();
include __DIR__ . "/functions.PHP";

$passwordLength = $_GET["length"];
//password length selected by user
var_dump($_GET);

$password = password_generator($passwordLength);
//password constant 

$_SESSION["password"] = $password;

if (isset($passwordLength)) {
    header('Location: ./showPassword.php');
}

include __DIR__ . "/views/layout/head.php"
    ?>

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