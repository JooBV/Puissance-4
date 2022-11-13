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
                    <form action="" method="post">
                        <input type="text" name="mail" placeholder="Email" required />
                        <input type="password" name="password" placeholder="Mot de passe" required />
                        <button type="submit">Connexion</button>
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