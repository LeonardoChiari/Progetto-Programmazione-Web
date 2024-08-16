<?php

require_once('config.php');

session_start();

if (!isset($_SESSION['loggato'])  || $_SESSION['loggato'] !== true) {
    header("location: account.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAK STOREEEE</title>
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .dati_utente {
        font-size: 2em;
        font-family: sans-serif;
        position: relative;
        text-align: center;
        margin-top: 2em;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 25em;
        align-items: center;
        justify-content: center;
        margin-left: 33em;
        margin-top: 3em;
        text-align: center;

    }

    form>input {
        margin-top: 1em;
        margin-bottom: 2em;
        height: 3em;
        width: 100%;
    }

    .mese select,
    .anno select {
        width: 10em;
        font-size: 1em;
        margin-bottom: 1em;
        margin-top: 1em;
    }

    .mese {
        float: left;
        width: 50%;
    }

    .anno {
        float: right;
        width: 49%;
    }
</style>


<body>
    <section id="header">
        <a href="#"><img src="img/thumbnail-1.webp" id="logo" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

                <!-- aggiungo al navbar il tasto account-->
                <li><a class="active" href="">Account</a></li>

                <li id="leva-car"><a href="cart.html"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a></li>
                <a href="#" id="close">
                    <i class="fa fa-times" aria-hidden="true"></i>

                </a>

            </ul>
        </div>

        <div id="mobile">

            <a href="cart.html"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-outdent" aria-hidden="true"></i>
        </div>
    </section>

    <div class="dati_utente">
        <?php    //stampo i dati utente a schermo
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];

        $sql_select = "SELECT * FROM Utenti WHERE username = '$username' ";
        $sql_select_carta = "SELECT * FROM carte WHERE id = '$id'";
        if ($result = $connessione->query($sql_select)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_array();
                $id = $row['id'];
                echo "<h3>Username: " . $row["username"] . "</h3>";
                echo "<h3>Email: " . $row['email'] . "</h3>";

                if ($result2 = $connessione->query($sql_select_carta)) {
                    if ($result2->num_rows > 0) {
                        $row2 = $result2->fetch_array();
                        echo "<h3>Nome carta: " .$row2['nome'] . "</h3" . '<br>';
                        echo "<h3>Numero carta: " .$row2['numero'] . "</h3" . '<br>';
                        echo "<h3>Scadenza carta: " .$row2['scadenza'] . "</h3" . '<br>';
                        echo "<h3>CVV: " .$row2['cvv'] . "</h3" . '<br>'. '<br>';

                        echo "<script> document.getElementById('form_carte').style.display = 'none'; </script>"; 
                    }
                }
            }
        } else {
            echo "Non c'è nessun utente con questo username";
        }

        ?>

        <a href="logout.php">Logout account</a>

    </div>
    


    <form action="credit_card.php" method="POST" id="form_carte">

        <h2>Aggiungi metodo di pagamento</h2>

        <label for="nome_carta">Nome</label>
        <input type="text" name="nome_carta" id="nome_carta" required>

        <label for="numero_carta">Numero della carta</label>
        <input type="text" name="numero_carta" id="numero_carta" maxlength="19" >

        <label for="scadenza_carta">Scadenza carta</label>
        <input type="text" name="scadenza_carta" id="scadenza_carta" placeholder="mm/aa">

        <label for="cvv">CVV</label>
        <input type="text" name="cvv" id="cvv" maxlength="3" pattern="[0-9]*" inputmode="numeric" required>

        <input type="submit" value="Salva">

    </form>



    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/images.png">
            <h4>Contatti</h4>
            <p><strong>Indirizzo:</strong> Via brombeis, 80135 Napoli NA</p>
            <p><strong>Numero:</strong> +39 1234567890</p>
            <p><strong>Orario:</strong> 10-19, dal Lun al Sab</p>
            <div class="follow">
                <h4>Followaci</h4>
                <div class="icon">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
        </div>


        <div class="col">
            <h4>About</h4>
            <a href="#"> Su di noi</a>
            <a href="#"> Informazioni sulla spedizione</a>
            <a href="#"> Privacy</a>
            <a href="#"> Termine e condizioni</a>
            <a href="#"> Contattaci</a>

        </div>

        <div class="col">
            <h4> il mio Account</h4>
            <a href="#"> Sign in</a>
            <a href="#"> Vedi carrello</a>
            <a href="#"> La mia wishlist</a>
            <a href="#"> Traccia il mio pacco</a>
            <a href="#"> Aiuto</a>

        </div>
        <div class="col-install">
            <h4>Installa App </h4>
            <p>Dal App Store o Google Play</p>
            <div class="row">
                <img class="immagineapp" src="img/pay/Google_Play_2022_logo.png" alt="">
                <img class="immagineapp1" src="img/pay/apple_appstore_logo_icon_168587.png" alt="">
            </div>
            <p>Pagamenti in sicurezza</p>
            <img class="pay" src="img/pay/visamastercardAexp.jpg" alt="">


        </div>

        <div class="copyright">
            <p>2024, Moldavo&co. - HTML CSS JS e qualcosaltro</p>
        </div>



    </footer>

    <script src="script.js"></script>
    <!--<img class="rotate01" src="img/Poké_Ball_icon.svg.png">-->
</body>


</html>

<label for="scadenza_carta">Scadenza carta (mm/aa)</label>
<input type="month" name="scadenza_carta" id="scadenza_carta" pattern="[0-9]*" inputmode="numeric">