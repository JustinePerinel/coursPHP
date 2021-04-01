<?php 
    require_once('../inc/functions.php');
    //vérification de ce que je récupère en $_GET 
    // jevar_dump($_GET);
?> 
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours PHP7 - Exos pratiques - 1</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-dark">
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - Exo 4 avec $_GET</h1>
        <p class="lead"></p>
    </div>

    <!-- RANGÉE PRINCIPALE -->
    <div class="row">
        <!-- LA NAVIGATION EN INCLUDE (penser à ajouter le JS qui va avec en fin de page) -->
        <?php
            require('../inc/sidenav.inc.php')
        ?>

        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">
                <!-- BOUTON DE LA NAV -->
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="definition">Votre compte : mise à jour ou suppression</h2>
                    <!-- MINI exo -->
                    <!-- 1/ affichez dans cette page un titre "Mon compte : un nom et un prénom"-->
                    <!-- 2/ vous y ajouter un lien "modifier mon compte" : Ce lien renvoie dans l'url à la même page, donc à cette page, l'action demandé est "modification", quand on clique sur le lien -->
                    <!-- 3/ Si vous avez reçu cette action "modification" par l'url, alors vous affichez "Vous avez demandé la modification de votre compte" -->
                    
                    <div class="col-sm-12">
                        <h3>Mon compte : Justine Périnel</h3>
                    </div><!-- fin de la colonne -->
                    <div class="col-sm-12">
                        <?php 
                            if(isset($_GET['action']) && $_GET['action'] == 'modification') {
                                echo "<p class=\"alert alert-warning\">Vous avez demandé la modification de votre compte.</p>";
                            }
                            if(isset($_GET['action']) && $_GET['action'] == 'suppression') {
                                echo "<p class=\"alert alert-danger\">Vous avez demandé la suppression de votre compte.</p>";
                            } 
                        ?>
                        <a href="04-get.php?action=modification">Modifier mon compte</a>
                        <a href="04-get.php?action=suppression">Supprimer mon compte</a>
                         
                    </div><!-- fin de la colonne -->
                    <div class="col-sm-12">
                        <p></p>
                    </div><!-- fin de la colonne -->

                </div><!-- fin de la rangée -->

                <hr>
                <br><br>

            </main>
        </div> <!-- FIN DE LA PARTIE PRINCIPALE COL-8 -->

        <div class="col-sm-2 aside">
            <ul>
                <!-- DES ANCRES POUR LE COURS ET LES EXOS -->
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li></li>
            </ul>
        </div>
    </div>

    <!-- LE FOOTER EN REQUIRE -->
    <?php
        require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- le js pour la navigation  -->
    <script src="../inc/sidenav.js"></script>

</body>
</html>