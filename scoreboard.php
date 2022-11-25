<?php
include "includes/database.inc.php";
?>

<?php
$requet = $conn->query('SELECT * FROM score INNER JOIN jeu ON jeu.id = score.id_jeu INNER JOIN utilisateur ON utilisateur.id = score.id_joueur WHERE score.id = 1');
$reponse = $requet->fetch();
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
                    <tr>
                        <td><?= $reponse['id']; ?></td>
                        <td><?= $reponse['Nom_du_jeu']; ?></td>
                        <td><?= $reponse["Pseudo"]; ?></td>
                        <td><?= $reponse["Difficulte_de_la_partie"]; ?></td>
                        <td><?= $reponse["Score_de_la_partie"]; ?></td>
                    </tr>
                </tbody>
            </table>

            <!--             <table class="score">
                <thead>
                    <div class="info-classement">
                        <tr class="bloc-classement">
                            <th class="classement">Top frage</th>
                            <th class="classement">Nom du jeu</th>
                            <th class="classement">Pseudo</th>
                            <th class="classement">Niveau de difficulté</th>
                            <th class="classement">Score</th>
                            <th class="classement">Date</th>
                        </tr>
                </thead>
        </div>

        <div class="info-jeu">
            <tr class="bloc-jeu">
                <th class="info-joueur">#1</th>
                <th class="info-joueur">nomJeu</th>
                <th class="info-joueur">Pseudo</th>
                <th class="info-joueur">Niveau de difficulté</th>
                <th class="info-joueur">Score</th>
                <th class="info-joueur">Date</th>
            </tr>
            </table>
        </div> -->

            <!-- Fin du tableau -->

            <!--Informations sur les contact et les lieux de location-->

            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->
</body>

</html>