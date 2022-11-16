<?php
include "includes/database.inc.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/inscri.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
    <title>Connexion</title>
</head>

<body>

    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Inprotation du header -->

    <header>
        <div class="title">
            <h2>Connexion</h2>
            <section class="login-container">
                <div>
                    <form method="post">
                        <input type="text" name="mail" placeholder="Email" required />
                        <input type="password" name="password" placeholder="Mot de passe" required />
                        <button name="submit" type="submit">Connexion</button>
                    </form>
                </div>
            </section>


            <?php

            $error = false;

            if (isset($_POST['submit'])){

                if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                    $email = $_POST['mail'];
                } else {
                    echo 'Email invalide';
                    $error = true;
                }

                if (strlen($_POST['password']) > 8) {
                    $password = $_POST['password'];
                } else {
                    echo 'password invalide';
                    $error = true;
                }

                if (!$error) {
                    $test = $db->prepare('SELECT * FROM utilisateur WHERE Email = ? AND Password = ?');
                    $test->bindParam(1, $email);
                    $test->bindParam(2, $password);
                    $test->execute();
                }

                    if($r = $test->fetch()){
                        $_SESSION['user_id'] = $r['id'];
                        
                    }else{
                        echo 'Email et mdp invalide';
                    
                    }

                }

            ?>


            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->

</body>
</html>