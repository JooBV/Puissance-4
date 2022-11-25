<?php
include "includes/database.inc.php";
?>

<?php


/* Partie Email */


    session_start();
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){


            if($email != " && $password !="){
                $req = $conn->prepare(('SELECT * FROM 
                utilisateur WHERE Email = ? AND passwd = ?'));
                $req->execute([$email, $password]);
                $reponse = $req->fetch();
                if(!empty($reponse)){
                    $_SESSION['user_id'] = $reponse['id'];
                    header('Location: index.php');
                    exit();
                }else{
                    echo 'login error';
                }
            }else{
                echo 'login or mail error';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/connexion.css">
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
                        <input type="text" name="email" id="email" value="<?php if (isset($email)) {echo $email;} ?>" placeholder="Email" required />
                        <input type="password" name="password" id="password" value="<?php if (isset($password)) {echo $password;} ?>" placeholder="Mot de passe" required />
                        <button name="submit" type="submit">Connexion</button>
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