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
    <title>Inscription</title>
</head>

<body>


    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Inprotation du header -->

    <!-- Début du header -->
    <header>
        <div class="title">
            <h2>Inscription</h2>
            <!-- Titre du header -->

            <section class="login-container">
                <div>
                    <form action="" method="post">
                        <input type="text" name="mail" placeholder="Email" required />
                        <input type="text" name="pseudo" placeholder="Pseudo" required />
                        <input type="password" name="password" placeholder="Mot de passe" required />
                        <input type="password" name="password" placeholder="Confirmez votre mot de passe" required />
                        <button type="submit">Inscription</button>
                    </form>
                </div>
            </section>

            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->

</body>

</html>