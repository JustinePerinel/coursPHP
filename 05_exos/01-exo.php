<?php 
    require_once('../inc/functions.php');
    $chaine = "Ma maie fait du vélo !";
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
            <h2 class="col-sm-12 text-center">1 - Mini exo 1</h2>
        <div class="col-12">
            <p>Le premier exo consiste à afficher le jour de la semaine :</p>
            <?php 
                quelJour();
                //cette fonction permet d'analyser dans le navigateur le contenu et le type d'une variable
                echo "<p class=\"alert alert-primary w-50 text-center mx-auto\"><strong>DU COURS :</strong> <br>";
                var_dump('coucou');
                echo "<br>";
                var_dump($chaine);
                echo "<br>";
                var_dump($decimal);
                echo "<br>";
                var_dump($entier);
                echo "<br>";
                print_r("Affiche du contenu avec la fonction print_r");
                echo "<br>";

                //fonction gettype() = renvoie le type d'une variable
                echo gettype($chaine); // renvoie string
                echo "<br></p>";
            ?> 

        </div><!-- fin de la colonne -->
        <hr>

        <h2 class="col-sm-12 text-center">1 - Mini exo 2</h2>
        <div class="col-12">
            <p>Écrire la phrase suivante "La devise de la République est Liberté, Égalité, Fraternité" :</p>
            <?php 
                $lib = "Liberté";
                $egal = "Égalité";
                $frat = "Fraternité";

                echo "<p class=\"alert alert-success w-50 mx-auto text-center\">La devise de la République Française est <br>\"$lib, $egal, $frat\".</p>"
            ?> 
        </div>
        <hr>

        <h2 class="col-sm-12 text-center">3 - Mini exo 3</h2>
        <div class="col-12">
            <p>Si le prix est supérieur à 100 euros a remise est de 10% sinon la remise est de 5%, et donnez le montant du prix net:</p>

            <button value="Calculez votre discount" class="btn btn-success " type="button" name="supprimer" onclick="myFunction();">Cliquez ici pour calculer le prix de votre object</button>

            <?php 
                if(isset($_GET['prixObject'])){
                    $prix = $_GET['prixObject'];
                    $discount1 = 0.05;
                    $discount2 = 0.1;
                    $cinqpourcent = $prix * $discount1;
                    $dixpourcent = $prix * $discount2;

                    if ($prix>100) {
                        echo "<p class=\"alert alert-success w-50 mx-auto text-center\">Vous avez une remise de $dixpourcent €.</p>";
                    }else {
                        echo "<p class=\"alert alert-success w-50 mx-auto text-center\">Vous avez une remise de $cinqpourcent €.</p>";
                }}
            ?>
        </div>
        <hr>

        <h2 class="col-sm-12 text-center">4 - Mini exo 4</h2>
        <div class="col-12">
            <p>Si vous achetez un PC à plus de 1000 euros, la remise est de 15%. Pour un PC de 1000 euros et moins, la remise est de 10%, si c'est un livre, la remise est de 5%, pour tous les autres articles, la remise est de 2%.</p>
            <div class="alert alert-success text-center w-75 mx-auto">

            <form action="#" method="GET">
                Objet acheté :<input type="text" name="achat" placeholder="PC, livre ou autre"/><br>
                Prix :<input type="text" name="prixAchat" placeholder="En euros" style="margin-top:15px"/> <br>
                <input type="submit" name="submit" style="margin-top:15px"/> 
            </form>


        <?php 
            // Vérifier si le formulaire est soumis 
            if (isset( $_GET['submit'] ) ) {
                /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé */
                $achat = $_GET['achat']; 
                $prixAchat = $_GET['prixAchat']; 
                // pour la remise le calcul suivant : on remplace 10 par le pourcentage que l'on veut obtenir 
                //10%. 1-(10/100) = 0.9
                $remise15 = $prixAchat*0.85;
                $remise10 = $prixAchat*0.9;
                $remise5 = $prixAchat*0.95;
                $remise2 = $prixAchat*0.98;

                if ($achat == 'PC'){
                    if($prixAchat >= 1000){
                        //remise de 15%
                        echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 15%. Vous paierez $remise15 €";
                    }else {
                        //remise de 10%
                        echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 10%. Vous paierez $remise10 €";
                }}else if ($achat == 'livre'){
                    //remise de 5%
                    echo "Vous avez acheté un livre à $prixAchat €, vous bénéficiez donc d'une remise de 5%. Vous paierez $remise5 €";
                }else {
                    //remise de 2%
                    echo "Vous avez acheté un.e $achat à $prixAchat €, vous bénéficiez donc d'une remise de 2%. Vous paierez $remise2 €";
                }
            }
        ?> 
            </div>
        </div>
        <hr>

        <h2 class="col-sm-12 text-center">5 - Mini exo 5</h2>
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

        <h2 class="col-sm-12 text-center">6 - Mini exo 6</h2>
        <div class="col-12">
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
    </div>
    </div>

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