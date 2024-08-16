<?php

require_once('config.php');


//grazie al metodo Required non devo fare una INSERT ogni volta, chiamando execute mando i valori e si esegue lo statement già controllato dal server
/* $sql = "INSERT INTO Utenti (email, username, password) VALUES (?,?,?)";
if ($statement = $connessione->prepare($sql)) {
    $statement->bind_param("SSS", $email, $username, $password);


    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $statement->execute();

    echo "Registrazione avvenuta con successo";
} else {
    echo "errore";
}

$statement->close();*/


$email = $connessione->real_escape_string($_POST['email']);
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

//$alert = "<script> alert('Registrazione effettuata con successo'); </script>";
//hash della password cosi non si puo vedere nel db
//$hased_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO Utenti (email, username, password) VALUES ('$email','$username', '$password')";

if ($connessione->query($sql) === true) {

    echo
    " 
    <script> 
     alert('Registrazione effettuata con successo!');
     document.location.href = 'login.html';
    </script>
    ";

    session_start();
    $_SESSION['registrato'] = true;
    
    //header("location: login.html");

} else {
    echo "Errore in fase di registrazione";
}



/*mail 
$to = "leonida4game@gmail.com";
$subject = "Email da Oak Store";
$message = "Email inviata con successo a l'utente " . $username . "!!";
$from = "Oak_store@gmail.com";

mail($to, $subject, $from, $message);*/

?>