<?php 
    require_once('../inc/functions.php');
    $chaine = "Ma grand-mère fait du vélo !";
    $decimal = 18.74;
    $entier = 500;
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
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - Premier exercice</h1>
        <p class="lead">Première page d'exercice pour le PHP</p>
        <?php 
            minPap();
        ?> 
    </div>

    <div class="row">
        <!-- la nav en include PHP -->
        <?php
        require('../inc/sidenav.inc.php');
        ?>

        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">
            <!-- le bouton pour la nav  -->
            <button type="button" id="sidebarCollapse" class="navbar-btn">
            <span></span>
            <span></span>
            <span></span>
            </button>

            <div class="row">
                <hr>
                <div class="col-sm-12 col-md-6">
                <h2 class="text-center">1 - Mini exo 1</h2>
                    <p>Le premier exo consiste à afficher le jour de la semaine. Ici, je le fais d'avord en français et ensuite en anglais.</p>
                    <?php 
                        quelJour();
                        // //cette fonction permet d'analyser dans le navigateur le contenu et le type d'une variable
                        // echo "<p class=\"alert alert-primary w-50 text-center mx-auto\"><strong>DU COURS :</strong> <br>";
                        // var_dump('coucou');
                        // echo "<br>";
                        // var_dump($chaine);
                        // echo "<br>";
                        // var_dump($decimal);
                        // echo "<br>";
                        // var_dump($entier);
                        // echo "<br>";
                        // print_r("Affiche du contenu avec la fonction print_r");
                        // echo "<br>";

                        // //fonction gettype() = renvoie le type d'une variable
                        // echo gettype($chaine); // renvoie string
                        // echo "<br></p>";
                    ?> 

                </div><!-- fin de la colonne -->
                
                <div class="col-sm-12 col-md-6">
                <h2 class="text-center">2 - Mini exo 2</h2>
                    <p>Écrire la phrase suivante "La devise de la République est Liberté, Égalité, Fraternité" :</p>
                    <?php 
                        $lib = "Liberté";
                        $egal = "Égalité";
                        $frat = "Fraternité";

                        echo "<p class=\"alert alert-success w-50 mx-auto text-center\">La devise de la République Française est <br>\"$lib, $egal, $frat\".</p>"
                    ?> 
                </div> <!-- fin de la colonne -->
                <hr>

                <div class="col-sm-12 col-md-6">
                <h2 class="text-center">3 - Mini exo 3</h2>
                    <p>Si le prix est supérieur à 100 euros a remise est de 10% sinon la remise est de 5%, et donnez le montant du prix net:</p>
                    
                    <?php 
                        include_once('../inc/form.php')
                    ?> 

                </div><!-- fin de la colonne -->

                <div class="col-sm-12 col-md-6">
                <h2 class="text-center">4 - Mini exo 4</h2>
                    <p>Si vous achetez un PC à plus de 1000 euros, la remise est de 15%. Pour un PC de 1000 euros et moins, la remise est de 10%, si c'est un livre, la remise est de 5%, pour tous les autres articles, la remise est de 2%.</p>
                    <div class="alert alert-success text-center w-75 mx-auto">

                    <?php 
                    include_once('../inc/form1.php')
                    ?> 
                    </div>
                </div>
                <hr>

                <h2 class="col-sm-12 text-center">5 - Mini exo 5</h2>
                <p>Ici, on veut faire une boucle à partir de la variable i. On veut qu'elle s'incrémente jusqu'à atteindre 25. Le faire avec une boucle <code>while</code> et l'initialisez à zéro. <code>while ($i < 25){echo ++$i;}</code>. Ici, la variable est pré incrémentée. </p>
                <div class="col-12">
                    <?php 
                        $i = 0;
                        // boucle while : tant que i est inférieur à 25 on incrémente
                        while ($i < 25){
                            echo "<p class=\"alert alert-success text-center w-75 mx-auto\">La variable i vaut $i, on incrémente : " . ++$i . "</p>";
                        }
                    ?> 
                </div> <!-- fin de la colonne -->
                <hr>

                <div class="col-sm-12 col-md-6">
                <h2 class="text-center">6 - Mini exo 6</h2>
                <p>Fabriquez deux select. Dans le premier, avec un code <code>while</code> faire des options allant de l'année 1920 à 2021. Puis faire la m^meme chose mais en partant de 2021 et en descendant jusqu'à 1920. </p>
                <div class="alert alert-success text-center w-75 mx-auto">
                        <form action="#" method="GET"></form>
                            <label for="annee">Année de naissance : </label>
                            <select name="annee" id="annee">
                            <?php 
                                // dans une boucle, faire les options d'un élément select en démarrant à 1920 et en s'arrêtant à 2021
                                $annee = 1920;
                                while ($annee <= 2021) {
                                    echo "<option value =\"$annee\" name=\"choix\">" . $annee++ . "</option>";
                                }
                            ?> 
                            </select>
                        </form>
                        <form action="#" method="GET">
                            <label for="annee2">Année de naissance : </label>
                            <select name="" id="">
                            <?php 
                                // dans une boucle, faire les options d'un élément select en démarrant à 1920 et en s'arrêtant à 2021
                                $annee2 = 2021;
                                while ($annee2 >= 1920) {
                                    echo "<option value =\"$annee2\" name=\"choix\">" . $annee2-- . "</option>";
                                }
                            ?> 
                            </select>
                        </form>
                </div>
                </div> <!-- fin de la colonne -->

                <div class="col-sm-12 col-md-6">
                    <h2 class="col-sm-12 text-center">7 - Mini exo 7</h2>
                    <p></p>
                        <?php 
                            $chamalow = 0;
                            do {
                                echo "<p class=\"alert alert-success text-center w-75 mx-auto\">$chamalow - J'aime le chamalow !</p>";
                                $chamalow++;
                            } while( $chamalow > 10) // la condition renvoie FALSE mais le code s'est déjà exécuté une fois > = supérieur
                        ?> 
                </div> <!-- fin de la colonne -->
                <hr>

                <div class="col-sm-12 col-md-6">
                <h2 class="text-center">8 - Mini exo 8</h2>
                    <p>Avec Switch : si la variable contient espagnol, vous dite "hola", si anglais "hello", si francais "coucou" !</p>
                    <div class="alert alert-success text-center w-75 mx-auto">
                        <form action="#" method="POST">
                            <label for="langue">Quelle langue parlez-vous ?</label>
                            <input type="text" name="langue">
                            <input type="submit" name="submit">
                        </form>
                        <?php 
                            if (isset( $_POST['submit'] ) ) {
                                /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé */
                                $langue = $_POST['langue']; 
                                // switch ($langue){
                                //     case "anglais":
                                //         echo "Hello !";
                                //         break;
                                //     case "français":
                                //         echo "Coucou !";
                                //         break;
                                //     case "allemand":
                                //         echo "Guten Tag !";
                                //         break;
                                //     case "espagnol":
                                //         echo "Holà !";
                                //         break;
                                //     default:
                                //         echo "Désolée je ne parle pas $langue !";
                                //         break;
                                // }
                                if($langue == 'anglais') {
                                    echo "Hello !";
                                } else if ($langue == 'français') {
                                    echo "Coucou !";
                                } else if ($langue == 'allemand') {
                                    echo "Guten Tag !";
                                }else if ($langue == 'espagnol') {
                                    echo "Holà !";
                                }else if ($langue == 'chinois') {
                                    echo "你好 !";
                                }else if($langue == 'japonais') {
                                    echo "こんにちは !";
                                }else {
                                    echo "Désolée je ne parle pas $langue !";
                                }
                            }
                        ?> 
                    </div>
                </div> <!-- fin de la colonne -->

                <div class="col-sm-12 col-md-6">
                    <h2 class="text-center">9 - Mini exo 9</h2>
                    <p>Afficher les mois de 1 à 12 à l'aide d'une boucle for dans un menu déroulant :</p>
                    <div class="alert alert-success text-center w-75 mx-auto">
                        <select name="mois" id="mois">
                            <?php 
                                for ($i = 1; $i <=12; $i++) {
                                    echo "<option value=\"\">".$i."</option>";
                                }  
                            ?> 
                        </select>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <h2 class="text-center">10 - Mini exo 10</h2>
                    <p>Faire une boucle for qui adffiche de 0 à 9 sur la même ligne, complétez cette boucle pour mettre ces chiffres dans un tableau HTML.</p>
                    <div class="alert alert-success text-center w-75 mx-auto">
                       <table class="table table-striped">
                           <tr>
                                <?php 
                                    for ($i = 0; $i <= 9; $i++) {
                                        echo "<td>" . $i . "</td>";
                                    }
                                ?> 
                           </tr>
                       </table>
                    </div>
                </div>



                </div><!-- fin de la rangée -->
                <hr>
                <br><br><br><br><br><br><br><br><br><br><br><br>

            </main>
        </div> <!-- fin de la partie principale, col-8 -->

        <div class="col-sm-2 aside">
            <ul>
                <li><a href="#definition">Définition</a></li>
                <li><a href="#affectation">Affectation de variables</a></li>
                <li><a href="#variablesPredefinies">Les variables prédéfinies</a></li>
                <li></li>
            </ul>
        </div> <!-- fin de la colonne 2 -->
    </div> <!-- fin de la rangée -->

    <?php
        require("../inc/footer.inc.php")
    ?>
    <!-- Optional JavaScript -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <script src="test.js"></script>
    <script src="../inc/sidenav.js"></script>

</body>
</html>