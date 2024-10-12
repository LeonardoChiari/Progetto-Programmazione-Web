<?php
    session_start();
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

<!-- aggiunto dello stile per la form che andrà spostato i style.css -->
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 50%;
        align-items: center;
        justify-content: center;
        margin-left: 20em;
        margin-top: 3em;

    }

    form>input {
        margin-bottom: 3em;
        height: 3em;
        width: 30em;
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
                <li><a class="active" href="account.php">Account</a></li>

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

    <form action="registrazione.php" method="POST">
        <h1>Registrati</h1>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="Invia">

        <p>Sei già registrato?? <a href="login.html">Accedi</a></p>

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