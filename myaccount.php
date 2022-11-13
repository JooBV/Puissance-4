<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/myaccount.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>

    <title>Mon compte</title>
</head>

<body>

    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Inprotation du header -->

    <!--Changer son adresse email-->
    <section class="space_out_section">
        <div class="change_info">
            <h3>Modifier mon adresse email :</h3>
            <label for="old_email"></label>
            <input type="email" id="old_email" name="old_email" placeholder="Ancien email" size="100" required class="required_answer">
        </div>
        <div class="change_info">
            <label for="new_email"></label>
            <input type="email" id="new_email" name="new_email" placeholder="Nouvel email" size="100" required class="required_answer">
        </div>
        <div class="change_info">
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" size="100" required class="required_answer">
        </div>
        <div class="change_info">
            <label for="confirm_password"></label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez le mot de passe" size="100" required class="required_answer">
        </div>
        <div class="change_info" class="submit">
            <input type="submit" value="Changer mon email" class="submit">
        </div>
    </section>
    <!--Changer son mot de passe-->
    <section class="space_out_section">
        <div class="change_info">
            <h3>Modifier mon mot de passe :</h3>
            <label for="old_password"></label>
            <input type="password" id="old_password" name="old_password" placeholder="Ancien mot de passe" size="100" required class="required_answer">
        </div>
        <div class="change_info">
            <label for="new_password"></label>
            <input type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe" size="100" required class="required_answer">
        </div>
        <div class="change_info">
            <label for="confirm_password"></label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez le mot de passe" size="100" required class="required_answer">
        </div>
        <div class="change_info" class="submit">
            <input type="submit" value="Changer mon mot de passe" class="submit">
        </div>
    </section>
    </div>
    <!--Informations sur les contact et les lieux de location-->
    
    <!-- Inprotation du footer -->

    <?php
    require_once 'view/footer.inc.php';
    ?>

    <!-- Fin Inprotation du footer -->

</body>
</html>