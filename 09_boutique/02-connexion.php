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
    <link href="">

    <title>La boutique - Connexion</title>
</head>

<body class="bg-dark">
    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1>La boutique - Connectez-vous !</h1>

                <form action="" method="POST" class="w-75 mx-auto">

                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" value="" placeholder="Ici, votre pseudo" required>
                        <!-- <?php echo $_POST['pseudo'] ?? ''; ?> -->
                    </div>
                    ​
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" value="" placeholder="Votre mot de passe, pensez à respecter aux majuscules !" required>
                        <!-- <?php echo $_POST['mdp'] ?? ''; ?> -->
                    </div>
​
                    <input type="submit" class="btn btn-info my-2">
                </form>
            </div>
        </div>  <!-- fin de la rangée -->
    </main>

    <!-- JS DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>