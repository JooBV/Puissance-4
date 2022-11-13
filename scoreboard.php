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
                <tr>
                    <th>Nom du jeu</th>
                    <th>Pseudo</th>
                    <th>Niveau de difficulté</th>
                    <th>Score</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>Memory</td>
                    <td>mon pseudo</td>
                    <td>Difficile</td>
                    <td>2988</td>
                    <td>jour/mois/annee</td>
                </tr>
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