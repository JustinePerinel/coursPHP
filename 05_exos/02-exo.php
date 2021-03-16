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

    <title>Cours PHP7 - Exos pratiques - 2</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-dark">
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - Premier exercice</h1>
        <p class="lead">Première page d'exercice pour le PHP</p>
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
                    <div class="col-sm-12">
                        <h2 class="text-center" id="exo1">1 - Exo 1</h2>
                        <p>Déclarez un tableau.</p>

                        <?php 
                            $tableau1 = array( 'Dalio', 'Gabin', 'Arietty', 'Fernandel', 'Carton' );
                            
                            // echo $tableau1; ne fonctionne pas car on ne pas transformer un tableau en chaîne de caractères

                            jeprint_r($tableau1); // affiche le contenu mais aussi le type et la valeur des éléments, ici du tableau

                            jevar_dump($tableau1);// en mode développement, le var_dump permettra de mieux lire les infos du tableau

                            /*
                            AUTRE FACON DE DÉCLARER UN ARRAY
                            */

                            $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];

                            $tableau2[] = 'Roumanie'; // autre tableau avec crochet vide
                            jevar_dump($tableau2);
                            jeprint_r($tableau2);
                        ?> 
                    </div><!-- fin de la colonne -->

                    <div class="col-sm-12">
                        <h2 class="text-center" id="exo1">2 - Exo 2</h2>
                        <p>Avec une boucle foreach() parcourez les deux tableaux de cette page et affichez les dans deux ul.</p>
                        <ul class="alert alert-success w-75 mx-auto">
                            <?php 
                                // on parcourt le tzbleau $tableau1 par ses valeurs, l'indice n'intéresse pas l'utilisateur , la variable $acteur prend les valeurs du tableau successivement à chaque tour de boucle. Le mot cle AS est obligatoire
                                foreach ($tableau1 as $acteur) { 
                                        echo "<li> $acteur </li>";
                                    }
                            ?> 
                        </ul>
                        <ul class="alert alert-success w-75 mx-auto">
                            <?php 
                                foreach ($tableau2 as $pays) { 
                                        echo "<li> $pays </li>";
                                    }
                            ?> 
                        </ul>
                    </div> <!-- fin de la colonne -->

                    <div class="col-sm-12">
                        <h2 class="text-center" id="exo1">3 - Exo 3</h2>
                        <p>Dans une ul, récupérez l'indice et la valeur dans une boucle foreach</p>
                        <ul class="alert alert-success w-75 mx-auto">
                            <?php 
                                foreach ($tableau1 as $indice => $acteur){
                                    echo "<li>Pour $indice, la valeur est $acteur</li>";
                                }
                            ?> 
                        </ul>
                    </div>

                    <div class="col-sm-12">
                        <h2 class="text-center" id="exo1">3 - Exo 3</h2>
                        <p>Déclarez un tableau associatif $contacts avec les indices suivants : prenom, nom, mail et tel et vous y mettez les vals correspondantes à un contact</p>
                            <?php 
                                $contact = array(
                                    'prenom' => 'Victor',
                                    'nom' => 'Hugo',
                                    'mail' => 'victor.hugo@outlook.fr',
                                    'tel' => '01.46.97.17.78',
                                );
                                jevar_dump($contact);
                            ?> 
                        <p>Puis affichez les valeurs avec une foreach dans une ul</p>
                        <ul>
                            <?php 
                                foreach ( $contact as $indice => $infocontact ) {
                                    echo "<li>Pour $indice, la valeur est $infocontact</li>";
                                }
                            ?> 
                        </ul>
                        <p>Puis affichez les valeurs dans des p sauf le prénom qui doit être dans un h3 !</p>
                        <div class="alert alert-success w-75 mx-auto">
                            <?php 
                                foreach ($contact as $indice => $info){
                                    if($indice == 'prenom'){
                                        echo "<h3>$info</h3>";
                                    }else {
                                        echo "<p>$indice : $info</p>";
                                    }
                                }
                            ?> 
                        </div>
                    </div> <!-- fin de la colonne -->

                    <div class="col-sm-12">
                        <h2 class="text-center" id="exo1">4 - Exo 4</h2>
                        <?php 
                            $tableauMulti = array(
                                0 => array(
                                    'prenom' => 'Jean',
                                    'nom' => 'Castex',
                                    'tel' => '01 25 26 26 90',
                                ),
                                1 => array(
                                    'prenom' => 'Marc',
                                    'nom' => 'Fesneau',
                                    'tel' => '01 25 45 96 36',
                                ),
                                2 => array(
                                    'prenom' => 'Élisabeth',
                                    'nom' => 'Moreno',
                                    'tel' => '01 78 65 96 36',
                                ),
                                3 => array(
                                    'prenom' => 'Sophie',
                                    'nom' => 'Cluzel',
                                    'tel' => '01 45 14 56 35',
                                ),
                            );
                        ?>
                        <p>Faire un foreach pour avoir les indices du tableau : </p>
                            <?php 
                                foreach ($tableauMulti as $indice => $ministre){
                                    jevar_dump($indice);
                                    echo "<p class=\"alert alert-success w-50 mx-auto text-center\">". $ministre['prenom']. " ". $ministre['nom'] ."</p>";
                                }
                                
                                // on passe en variable les contenus de chaque indice du tableau et on cible les indices nommés des sous-tableaux associatifs. 
                            ?>                       
                    </div> <!-- fin de la colonne -->


                    <div class="col-sm-12">
                        <h2 class="text-center" id="exo1">5 - Exo 5</h2>
                        <p>Faire un tableau $tailles avec les tailles de vêtements allant du small au extral large et les afficher grâce à une boucle foreach dans une ul. Puis les afficher dans un select avec une boucle foreach. </p>
                        <div class="alert alert-success w-75 mx-auto row">
                            <ul class="col-sm-12 col-md-6">
                                <?php 
                                    $tailles = [
                                        's' => 'small',
                                        'm' => 'medium',
                                        'l' => 'large',
                                        'xl' => 'extra-large',
                                    ];
                                    foreach ($tailles as $indice => $tailleVtmt) {
                                        echo "<li>$indice correspond à $tailleVtmt</li>";
                                    }
                                ?> 
                            </ul>
                            <div class="col-sm-12 col-md-6 text-center mx-auto">
                                <label for="tailleVetement">Choisissez votre taille : </label><br>
                                <select name="tailleVetement" id="tailleVetement">
                                    <option value="">-- Choisissez une option --</option>
                                    <?php 
                                        foreach ($tailles as $indice => $tailleVtmt) {
                                            echo "<option value=\"$indice\">$tailleVtmt</option>";
                                        }
                                    ?> 
                                </select>
                            </div>
                        </div>
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