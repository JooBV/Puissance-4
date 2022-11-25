<?php
include "assets/includes/database.inc.php";

$scores = $bdd->prepare ('SELECT jeu.nomJeu, pseudo, score, niveau, date_heure_partie FROM score
INNER JOIN utilisateur ON score.id_joueur = utilisateur.id
INNER JOIN jeu ON score.id_jeu = jeu.id
ORDER BY score DESC');

$scores->execute();
$scores = $scores-> fetchAll();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/scoreboard.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Scores</title>
</head>

<body>
    <!-- Inprotation du header -->
    <?php
    require_once 'view/header.inc.php';
    ?>
    <!-- Fin Inprotation du header -->

    <header>
        <div class="title">
            <h2>Scores</h2>
            <!-- Partie du tableau -->
            <div class="tableau">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Non du Jeu</th>
                            <th>Pseudo</th>
                            <th>Niveau de difficulté</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($scores as $score) { ?>

                            <tr>

                            <td> <?php echo $score['nomJeu'] ?> </td>
                            <td> <?php echo $score['pseudo'] ?></td>
                            <td> <?php echo $score['score'] ?></td>
                            <td> <?php echo $score['niveau'] ?></td>
                            <td> <?php echo $score['date_heure_partie'] ?> </td>

                            </tr>

                            <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div> 

            <!-- Fin du tableau -->

            <!--Informations sur les contact et les lieux de location-->

            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->
</body>

</html>