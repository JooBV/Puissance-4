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
    ?>

    <!-- Fin Inprotation du header -->


    <!--Niveaux de difficulté-->
    <header>
        <div class="title">
            <h2>Jeu</h2>
            <div class="leJeu">
                <div class="les-Difficultes">
                    <a href="" class="les-Difficultes2">Facile</a>
                    <a href="" class="les-Difficultes2">Intermédiaire</a>
                    <a href="" class="les-Difficultes2">Expert</a>
                    <a href="" class="les-Difficultes2">Impossible</a>
                </div>
                <!--Cases du tableau-->
                <div class="les-Tableaux">
                    <table class="tableau1">
                        <tr>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td1">
                                <div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                    </table>
                    <table class="tableau2">
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td2">
                                <div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                    </table>
                    <table class="tableau3">
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div>
                            </td>
                        </tr>
                    </table>
                    <table class="tableau4">
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                            <td class="td3">
                                <div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


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



            <!-- Inprotation du footer -->

            <?php
            require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Inprotation du footer -->

</body>

</html>