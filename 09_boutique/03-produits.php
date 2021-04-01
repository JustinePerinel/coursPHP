<?php 
    require_once('inc/init.php');
    // jeprint_r($_SESSION);
?> 
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- mon style -->
    <!-- <link href=""> -->

    <title>La boutique - Nos produits</title>
</head>

<body class="bg-dark">
    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12">
                <h1>La boutique - Découvrez nos premiers produits !</h1>
                <?php
                    $requete = $pdoSITE->query("SELECT * FROM produit ORDER BY id_produit");
                    echo "<table class=\"table table-dark table-striped\">";
                    echo "<thead><tr><th scope=\"col\">ID_produit</th><th scope=\"col\">Visuel</th><th scope=\"col\">Référence</th><th scope=\"col\">Titre</th><th scope=\"col\">Public</th><th scope=\"col\">Prix</th><th scope=\"col\">Fiche</th></tr></thead>";
                    while($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {

                        echo "<tr>";
                        echo "<td>#". $ligne['id_produit']. "</td>";  
                        echo "<td><img src=\"". $ligne['photo']. "\" width=\"200\"></td>"; 
                        echo "<td>". $ligne['reference']. "</td>";
                        echo "<td>". $ligne['titre']. "</td>";
                        echo "<td>";
                        if($ligne['public'] == 'f') {
                            echo "Féminin ";
                        }else if ($ligne['public'] == 'm'){
                            echo "Masculin";
                        }else {
                            echo "Mixte";
                        }
                        $fmt = new NumberFormatter( 'ru_RU', NumberFormatter::CURRENCY );
                        echo "<td>" .$fmt->formatCurrency($ligne['prix'], "EUR"). "</td>";
                        echo "<td><a href=\"fiche-produit.php?id_produit=".$ligne['id_produit']."\" class=\"text-white\">Voir sa fiche</a></td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                    $a =' coucou';
                    $b = TRUE;

                    
                ?>
            </div>
        </div>  <!-- fin de la rangée -->
    </main>

    <!-- JS DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>