<?php 
    require_once('../inc/functions.php');
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
        <h1 class="display-3">Cours PHP7 - La méthode POST</h1>
        <p class="lead">La méthode POST réceptionne les données d'un formulaire, $_POST est une superglobale.</p>
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
                    <h2 class="col-sm-12 text-center" id="definition">1 - Introduction</h2>
                    <div class="col-sm-12">
                    <!-- EXO faire un formulaire avec les champs prénom, nom, email, adresse, code postal et ville -->
                    <!-- puis récupérer dans une page php 03-form-traitement.php les informations de $_POST -->
                    <!-- puis on fabriquera ensemble un fichier .txt pour stocker les infos du formulaire -->
    ​
                        <form action="method_form_traitement.php" method="POST">
        ​
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div><!-- fin champs prénom -->
        ​
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div><!-- fin champs nom -->
        ​
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div><!-- fin champs email -->
        ​
                            <div class="form-group">
                                <label for="">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" required>
                            </div><!-- fin champs adresse -->
        ​
                            <div class="form-group">
                                <label for="code_postal">Code postal</label>
                                <input type="number" class="form-control" id="code_postal" name="code_postal" min="01000" max="99999" required>
                            </div><!-- fin champs code postal -->
        ​
                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" required>
                            </div><!-- fin champs ville -->
        ​
                            <button type="submit" class="btn btn-small btn-info">Envoyer</button>
        ​
                        </form><!-- fin du formulaire -->

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