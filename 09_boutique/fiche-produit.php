<?php 
    require_once('inc/init.php');

    if (isset ($_GET['id_produit'])) {
        $resultat = $pdoSITE->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
        $resultat->execute(array (
            ':id_produit' => $_GET['id_produit']
        ));
    
        if($resultat->rowCount() == 0) {
            header('location:03-produits.php');
            exit();
        }
    
        $fiche = $resultat->fetch(PDO::FETCH_ASSOC);
    }else{
        header('location:03-produits.php');
        exit();
    }

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

    <title>La boutique - Produit #<?php echo $fiche['id_produit']; ?></title>
</head>

<body class="bg-dark">
    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">La boutique - Découvrez notre <?php echo $fiche['titre'] ?>!</h1>

                <div class="card mx-auto" style="width: 18rem;">
                    <img src="<?php echo $fiche['photo'];?>" class="card-img-top">
            
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $fiche['categorie']. " - " .$fiche['couleur']; ?></h5>

                        <p class="card-text"><?php echo "Description : " .ucfirst($fiche['description']). "<br> Taille : " .ucfirst($fiche['taille']). "<br> Public : ";
                        if($fiche['public'] == 'f') {
                            echo "Féminin ";
                        }else if ($fiche['public'] == 'm'){
                            echo "Masculin";
                        }else {
                            echo "Mixte";
                        }
                        $fmt = new NumberFormatter( 'ru_RU', NumberFormatter::CURRENCY );
                        echo "<br>Prix : " .$fmt->formatCurrency($fiche['prix'], "EUR"). "</p>";
                        if ($fiche['stock'] < 1) {
                            echo "<p class=\"alert alert-danger\">Ce produit n'est plus en stock !</p>";
                        }elseif ($fiche['stock'] < 4) {
                            echo "<p class=\"alert alert-warning\">Attention, il ne reste presque plus de " . strtolower($fiche['titre']) . " ! Plus que " .$fiche['stock']. " " .strtolower($fiche['categorie']) . "s en stock.</p>";
                        }elseif ($fiche['stock'] == 1) {
                            echo "<p class=\"alert alert-warning\">Attention, il ne reste qu'un" .strtolower($fiche['categorie']) . " en stock.</p>";
                        }else {
                        echo "<p class=\"alert alert-success\">Encore en stock : ". $fiche['stock']. "</p>";
                        } ?>  
                    </div> <!-- fin card body -->
                </div><!-- fin card -->
                <p>Retourner à <a href="03-produits.php">tous nos produits</a></p>
                
            </div>
        </div>  <!-- fin de la rangée -->
    </main>

    <!-- JS DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>