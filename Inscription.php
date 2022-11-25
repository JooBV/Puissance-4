<?php
include "includes/database.inc.php";


$valid = true;
$err = array();

$date = new DateTime('now', new DateTimeZone('Europe/Paris'));
$date = $date->format('m/d/Y h:i:s a');

if (isset($_POST['submit'])) {
    $mail = trim($_POST['email']);
    $pseudo = trim($_POST['pseudojoueur']);
    $password = trim($_POST['mdp']);
    $confpassword = trim($_POST['confmdp']);

    if (!isset($_POST['email'])) {
        $valid = false;
        $err['email'] = " Ce champ ne peut pas être vide";
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
        $err[''] = "Email not valid";
    }

    if (!isset($_POST['pseudojoueur'])) {
        $valid = false;
        $err['pseudojoueur'] = " Ce champ ne peut pas être vide";
    }

    if (!isset($_POST['mdp'])) {
        $valid = false;
        $err['mdp'] = " Ce champ ne peut pas être vide";
    }

    if (!isset($_POST['confmdp'])) {
        $valid = false;
        $err['confmdp'] = "Ce champ ne peut pas être vide";
    }

    if ($password !== $confpassword) {
        $valid = false;
        $err[''] = "Le mot de passe est différent de la confirmation";
    }

    if ($valid == true) {
        $req = "INSERT INTO utilisateur (Email, passwd, Pseudo, Date_heure_inscription) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($req);
        $stmt->execute([$mail, $password, $pseudo]);
    }
}


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/inscri.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
    <title>Inscription</title>
</head>

<body>


    <!-- Improtation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Improtation du header -->

    <!-- Début du header -->
    <header>
        <div class="title">
            <h2>Inscription</h2>
            <!-- Titre du header -->
        </div>
        <form method="post">

            <?php if (!$valid) : ?>
                <div class="error">
                    <?php foreach ($err as $message) : ?>
                        <div><?php echo htmlspecialchars($message); ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <input type="text" id="email" name="email" value="<?php if (isset($mail)) {echo $mail;} ?>" placeholder="Email" />

            <input type="text" id="pseudojoueur" name="pseudojoueur" value="<?php if (isset($pseudo)) {echo $pseudo;} ?>" placeholder="Pseudo" />

            <input type="password" id="mdp" name="mdp" value="<?php if (isset($password)) {echo $password;} ?>" placeholder="Mot de passe" />
            <div class="barre">
                <div id="barre1"></div>
                <div id="barre2"></div>
                <div id="barre3"></div>
            </div>
            <p id="msg">Le mot de passe est <span id="strength"></span></p>
            <input type="password" id="confmdp" name="confmdp" value="<?php if (isset($confpassword)) {echo $confpassword;} ?>" placeholder="Confirmez votre mot de passe" />
            

            <button type="submit" value="submit" name="submit" id="submit">Inscription</button>
        </form>

        <!-- Improtation du footer -->

        <?php
        require_once 'view/footer.inc.php';
        ?>
        <script src="/assets/js/inscription.js"></script>

        <!-- Fin Improtation du footer -->

</body>

</html>