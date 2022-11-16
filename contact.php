<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="memory">
    <link rel="stylesheet" href="assets/css/contacte.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
</head>

<body>


    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Inprotation du header -->

    <header>
        <div class="title">
            <h2>Nous contacter</h2>
            <!-- Titre du header -->

            <div class="contact">
                <div class="contener">
                    <p>06 05 04 03 02 01</p>
                </div>
                <div class="contener">
                    <p>support@powerofmemory</p>
                </div>
                <div class="contener">
                    <p>Paris</p>
                </div>
                <div class="imageContact">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div>
        </div>

        <!-- Début du form -->

        <form>
            <div class="row">
                <div class="input-group">
                    <input type="text" id="name" required>
                    <label for="name"> Nom</label>
                </div>
                <div class="input-group">
                    <input type="text" id="Email" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="input-group">
                <input type="text" id="Sujet" required>
                <label for="sujet">Sujet</label>
            </div>
            <div class="input-group">
                <textarea name="message" id="message" rows="10" required></textarea>
                <label for="message">Message</label>
            </div>
            <button type="envoyer">Envoyer</button>
        </form>

        <!-- Fin du form -->

    </header>

    <!-- Fin du header -->


    <!-- Inprotation du footer -->

    <?php
    require_once 'view/footer.inc.php';
    ?>

    <!-- Fin Inprotation du footer -->

</body>

</html>