<?php

require_once('config.php');

session_start();

$username = $_SESSION['username'];

$sql_sel = "SELECT * FROM Utenti WHERE username = '$username' ";
if ($result = $connessione->query($sql_sel)) {
    if($result->num_rows > 0){
        $row = $result->fetch_array();
        $id = $row['id'];
    }
}

$nome_carta = $connessione->real_escape_string($_POST['nome_carta']);
$numero_carta = $connessione->real_escape_string($_POST['numero_carta']);
$scadenza_carta = $connessione->real_escape_string($_POST['scadenza_carta']);
$cvv = $connessione->real_escape_string($_POST['cvv']);


//$alert = "<script> alert('Registrazione carta con successo'); </script>";


$sql_carte = "INSERT INTO carte (id, nome, numero, scadenza, cvv) VALUES ('$id', '$nome_carta','$numero_carta', '$scadenza_carta', '$cvv')";

if ($connessione->query($sql_carte) === true) {

    echo
    " 
    <script> 
     alert('Metodo di pagamento salvato con successo!');
     document.location.href = 'pagina_utente.php';
    </script>
    ";

    //$_SESSION['carta'] = true;

} else {
    echo "Errore in fase di registrazione metodo di pagamento";
}

?>