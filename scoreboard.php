<?php
include "includes/database.inc.php";
$positions_user = 0;

$i = 1;
do {
    $positions_user++;
    $i - 1;
} while ($i <= 0);

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
            <table class="score">

                <div class="info-classement">
                    <tr class="bloc-classement">
                        <th class="classement">Top frage</th>
                        <th class="classement">Nom du jeu</th>
                        <th class="classement">Pseudo</th>
                        <th class="classement">Niveau de difficulté</th>
                        <th class="classement">Score</th>
                        <th class="classement">Date</th>
                    </tr>
                </div>

                <?php
                $sqlbs = 'SELECT Nom_du_jeu  
                  FROM jeu 
                  WHERE id= 1';
                $stmtbs = $db->prepare($sqlbs);
                $stmtbs->execute();



                $stmtbs = $stmtbs->fetchAll();
                foreach ($stmtbs as $nomJeu) {
                }
                $nomJeu = $nomJeu['Nom_du_jeu'];
                ?>

                <!-- NOM DU JEU -->


                <?php
                $sqlbs = 'SELECT Pseudo 
                  FROM utilisateur
                  INNER JOIN score ON score.id_joueur = utilisateur.id
                  ORDER BY Score_de_la_partie ASC ';
                $stmtbs = $db->prepare($sqlbs);
                $stmtbs->execute();



                $stmtbs = $stmtbs->fetchAll();
                foreach ($stmtbs as $userPseudo) {
                }
                $userPseudo = $userPseudo['Pseudo'];
                ?>

                

                <div class="info-jeu">
                    <tr class="bloc-jeu">
                        <th class="info-joueur">#1</th>
                        <th class="info-joueur"><?= $nomJeu ?></th>
                        <th class="info-joueur"><?= $userPseudo ?></th>
                        <th class="info-joueur">Niveau de difficulté</th>
                        <th class="info-joueur">Score</th>
                        <th class="info-joueur">Date</th>
                    </tr>
                    <tr class="bloc-jeu">
                        <th class="info-joueur">#2</th>
                        <th class="info-joueur">Nom du jeu</th>
                        <th class="info-joueur">Pseudo</th>
                        <th class="info-joueur">Niveau de difficulté</th>
                        <th class="info-joueur">Score</th>
                        <th class="info-joueur">Date</th>
                    </tr>
                    <tr class="bloc-jeu">
                        <th class="info-joueur">#3</th>
                        <th class="info-joueur">Nom du jeu</th>
                        <th class="info-joueur">Pseudo</th>
                        <th class="info-joueur">Niveau de difficulté</th>
                        <th class="info-joueur">Score</th>
                        <th class="info-joueur">Date</th>
                    </tr>
                    <tr class="bloc-jeu">
                        <th class="info-joueur">#<?= $positions_user ?></th>
                        <th class="info-joueur">Nom du jeu</th>
                        <th class="info-joueur">Pseudo</th>
                        <th class="info-joueur">Niveau de difficulté</th>
                        <th class="info-joueur">Score</th>
                        <th class="info-joueur">Date</th>
                    </tr>
                </div>




            </table>
        </div>
        <!--Informations sur les contact et les lieux de location-->

        <!-- Inprotation du footer -->

        <?php
        require_once 'view/footer.inc.php';
        ?>

        <!-- Fin Inprotation du footer -->
</body>

</html>