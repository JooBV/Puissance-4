<?php
include "includes/database.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/jeu.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/chat.css">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/responses.js"></script>
    <script src="assets/js/chat.js"></script>

    <title>Memory</title>
</head>

<body>

    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';


    function genereTable($max)
    {
        for ($i = 0; $i < $max; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $max; $j++) {
                echo '<td class="td1"><i class="fa-sharp fa-solid fa-question"></i></td>';
            }
            echo '</tr>';
        }
    }
    ?>

    <!-- Fin Inprotation du header -->


    <!--Niveaux de difficulté-->
    <header>
        <div class="title">
            <h2>Jeu</h2>
            <div class="leJeu">
                <div class="les-Difficultes">
                    <div class="container-difficulty">
                        <button onclick="myFunction()" class="click">Difficultés</button>
                        <div id="myDropdownDifficulty" class="list">
                            <button class="niveau" onclick="tablediff1()">Facile</button>
                            <button class="niveau" onclick="tablediff2()">Intermédiaire</button>
                            <button class="niveau" onclick="tablediff3()">Expert</button>
                            <button class="niveau" onclick="tablediff4()">Impossible</button>
                        </div>
                    </div>
                    <script>
                        function difficultyButton(valeur) {
                            difficulty = valeur;
                        }

                        function myFunction() {
                            document.getElementById("myDropdownDifficulty").classList.toggle("show");
                        }

                        let click = document.querySelector('.click');
                        let list = document.querySelector('.list');
                        click.addEventListener("click", () => {
                            list.classList.toggle('newlist');
                        });
                    </script>


                    <div class="container-theme">
                        <button onclick="myFunction2()" class="clickThemes">Themes</button>
                        <div id="myDropdownTheme" class="listTheme">
                            <button class="theme" onclick="">Pokemon</button>
                            <button class="theme" onclick="">Disney</button>
                            <button class="theme" onclick="">Emoji</button>
                            <button class="theme" onclick="">Pays</button>
                        </div>
                    </div>
                    <script>
                        function themesButton(valeur) {
                            theme = valeur;
                        }

                        function myFunction2() {
                            document.getElementById("myDropdownTheme").classList.toggle("show");
                        }

                        let clickThemes = document.querySelector('.clickThemes');
                        let listTheme = document.querySelector('.listTheme');
                        clickThemes.addEventListener("clickThemes", () => {
                            listTheme.classList.toggle('newtheme');
                        });
                    </script>


                    <section>
                        <span class="moves-counter">0</span> Moves
                        <div class="timer-container">
                            <span class="timer"><i class="fa fa-hourglass-start"></i> Timer: 00:00</span>
                        </div>
                        <div class="reset">
                            <button class="btn reset-btn">Reset <i class="fa fa-repeat"></i></button>
                        </div>
                    </section>
                </div>
                <!--Cases du tableau-->
                <div class="les-Tableaux">
                    <table id="tableau1" style="display: none">
                        <?php genereTable(4); ?>
                        <table id="tableau2" style="display: none">
                            <?php genereTable(8); ?>
                        </table>
                        <table id="tableau3" style="display: none">
                            <?php genereTable(12); ?>
                        </table>
                        <table id="tableau4" style="display: none">
                            <?php genereTable(20); ?>
                        </table>

                    </table>
                </div>
            </div>




            <!-- CHAT BAR BLOCK -->

            <?php
            require_once 'chat.php';
            ?>


            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->


            <script src="assets/js/jeu.js"></script>
</body>

</html>