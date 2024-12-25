<!DOCTYPE HTML>
<html>
<head>
    <title>Formulaire de devis - PicXam</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="no-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <div id="header" class="container">
                <!-- Logo -->
                <h1 id="logo"><a href="#">PicXam</a></h1>
                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main -->
        <div class="wrapper">
            <div class="container" id="main">

                <div class="row features">
                    <section class="col-6 col-12-narrower feature">
                        <form method="post" action="">
                            <div class="row gtr-50">
                                <div class="col-6 col-12-mobile">
                                    <input name="name" placeholder="Nom complet" type="text" required />
                                </div>
                                <div class="col-6 col-12-mobile">
                                    <input name="email" placeholder="Email professionnel" type="email" required />
                                </div>
                                <div class="col-6 col-12-mobile">
                                    <input name="phone" placeholder="Téléphone" type="tel" pattern="[0-9]{10}" maxlength="10" />
                                </div>
                                <div class="col-12">
                                    <textarea name="company" placeholder="Nom de l'entreprise (si applicable)"></textarea>
                                </div>
                                <div class="col-12">
                                    <select name="service" required>
                                        <option value="">Choisissez le service</option>
                                        <option value="dpannage">Dépannage informatique</option>
                                        <option value="maintenance">Maintenance de parc informatique</option>
                                        <option value="backup">Backup et sauvegarde de données</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" placeholder="Description détaillée du projet ou des besoins spécifiques" required></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Envoyer le devis" /></li>
                                        <li><input type="reset" value="Réinitialiser" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

                <!-- Le reste du contenu HTML reste inchangé -->

            </div>
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $to = "maxcip1@gmail.com"; // Remplacez par l'adresse email réelle où vous voulez recevoir les formulaires

    $subject = "Nouveau devis PicXam";

    $body = "
    Nom : $name<br>
    Email : $email<br>
    Téléphone : $phone<br>
    Compagnie : $company<br>
    Service demandé : $service<br>
    Message : $message<br>
    ";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Votre devis a été envoyé avec succès !');</script>";
        echo "<script>setTimeout(function() { window.location.href='index.html'; }, 500);</script>";
    } else {
        echo "<script>alert('Une erreur est survenue lors de l'envoi du devis. Veuillez réessayer plus tard.');</script>";
        echo "<script>setTimeout(function() { window.location.href='index.html'; }, 500);</script>";
    }
}
?>
