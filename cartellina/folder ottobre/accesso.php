<?php

    require_once('config.php');

    $username = $connessione->real_escape_string($_POST['username']);
    $password = $connessione->real_escape_string($_POST['password']);


    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $sql_select = "SELECT * FROM Utenti WHERE username = '$username' ";

        if($result = $connessione-> query($sql_select)){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if($password === $row['password']){
                session_start();

                $_SESSION['loggato'] = true;
                //$_SESSION['registrato'] = false;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];

                header("location: area_privata.php");
            }else{
                
                echo "<script> 
                    alert('Password o username errati!');
                    document.location.href = 'login.html';
                    </script>
                    ";
            }
        }else{
            echo "Non ci sono account con questo username";
        }
    }else{
        echo "Errore in fase di login";
    }
    $connessione->close();
?>