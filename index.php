<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f6ebfda22d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/chat.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Accueil</title>
</head>

<body>

    <!-- Inprotation du header -->

    <?php
    require_once 'view/header.inc.php';
    ?>

    <!-- Fin Inprotation du header -->


    <!--Phrase d'accueil du site-->
    <div>
        <h1 class="titreAccueil">Bienvenue dans <br> La page d'accueil</h1>
        <p class="accrocheTitre">Venez tester votre mémoire sur ce jeu</p>
        <div class="blocJouer">
            <a href="jeu.php" class="Jouer">
                <div>JOUER !</div>
            </a>
        </div>
    </div>
    </div>

    <!--Explications du jeu-->

    <!---Bloc principal contenant tous les blocs images et textes-->
    <div class="blocTextsImages">
        <!--Sous bloc du bloc principal contenant les images-->
        <div class="blocImages">
            <img src="assets/images/img1.png" alt="Image de petits écrans" id="Images-Ordi">
            <img src="assets/images/img2.png" alt="Petit bonhomme s'amusant" class="Images">
            <img src="assets/images/img3.png" alt="Image poker" class="Images">
        </div>
        <br>
        <!--Tableau pour les explications du jeu-->
        <table align="center">
            <tr>
                <td id="numTexte">01</td>
                <td id="titreTexte">Lorem ipsum</td>
                <td id="numTexte">02</td>
                <td id="titreTexte">Lorem ipsum</td>
                <td id="numTexte">03</td>
                <td id="titreTexte">Lorem ipsum</td>
            </tr>
            <tr>
                <td></td>
                <td id="paragrapheExplicationJeu"><br>Dolor sit amet consectetur adipisicing elit.<br>Ad, repellendus cumque magni officia<br>deserunt necessitatibus tenetur. Alias<br>pariatur facilis incidunt in dicta dolorem?<br>Corporis magnam esse nobis molestias minima<br>minus!</td>
                <td></td>
                <td id="paragrapheExplicationJeu">Dolor sit amet consectetur adipisicing elit.<br>Consequatur saepe voluptas esse<br>voluptatem iusto veritatis rem, pariatur<br>facere eveniet incidunt dolor, velit commodi<br>error. Delectus distinctio at quae quam minima.</td>
                <td></td>
                <td id="paragrapheExplicationJeu">Dolor sit amet consectetur adipisicing elit.<br>Sequi fugit, fugiat doloribus blanditiis minus<br>et a consequatur consectetur rem voluptatum<br>asperiores voluptatibus, corrupti id vel veniam<br>animi necessitatibus eveniet? Distinctio.</td>
            </tr>
        </table>
    </div>

    <!--Infos données du jeu-->
    <div class="backgroundDonnees">

        <div class="blocImageDonnees">
            <div class="bloc-box">
                <div>
                    <img class="Watchdogs" src="assets/images/WatchDogs.png" alt="Image WatchDogs qui va avec les données">
                </div>
                <div class="allDonnees">
                    <div class="Box1">
                        <div class="Bloc1">
                            <p id="textBox">310</p>
                            <p>Parties Jouées</p>
                        </div>
                        <div class="Bloc2">
                            <p id="textBox">10 sec</p>
                            <p>Temps Record</p>
                        </div>
                    </div>
                    <div class="Box2">
                        <div class="Bloc3">
                            <p id="textBox">1020</p>
                            <p>Joueurs Connectés</p>
                        </div>
                        <div class="Bloc4">
                            <p id="textBox">21 300</p>
                            <p>Joueurs Inscrits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Infos sur les Créateurs-->

        <h2 class="team">Notre Équipe</h2>
        <p class="accrocheTeam">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia ipsam sed fugiat recusandae!</p>
        <div class="blocCreateurs">
            <div id="Createurs">
                <img src="" alt="Photo de profil " id="Pdp">
                <p id="nomsTeam">E</p>
                <p id="textJob">Game Developer</p>
                <div class="bloc-bands">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-discord"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                </div>
            </div>
            <div id="Createurs">
                <img src="" alt="Photo de profil " id="Pdp">
                <p id="nomsTeam">J</p>
                <p id="textJob">Game Developer</p>
                <div class="bloc-bands">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-discord"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                </div>
            </div>
            <div id="Createurs">
                <img src="" alt="Photo de profil " id="Pdp">
                <p id="nomsTeam">T</p>
                <p id="textJob">Game Developer</p>
                <div class="bloc-bands">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-discord"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Inprotation du footer -->

    <?php
    require_once 'view/footer.inc.php';
    ?>

    <!-- Fin Inprotation du footer -->



    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                            </div>
                        </div>
                        
                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

</html>