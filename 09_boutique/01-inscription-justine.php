<?php 
    require_once('inc/init.php');
    jeprint_r($_SESSION);

    if ( !empty($_POST)) {
        $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
        $_POST['mdp'] = htmlspecialchars($_POST['mdp']);
        $_POST['nom'] = htmlspecialchars($_POST['nom']);
        $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
        $_POST['email'] = htmlspecialchars($_POST['email']);
        $_POST['civilite'] = htmlspecialchars($_POST['civilite']);
        $_POST['adresse'] = htmlspecialchars($_POST['adresse']);
        $_POST['code_postal'] = htmlspecialchars($_POST['code_postal']);
        $_POST['ville'] = htmlspecialchars($_POST['ville']);

        $requete = $pdoENT->prepare( " INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, adresse, code_postal, ville) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :adresse, :code_postal, :ville) " );

        $requete->execute(array (
            ':pseudo' => $_POST['pseudo'],
            ':mdp' => $_POST['mdp'],
            ':nom' => $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':email' => $_POST['email'],
            ':civilite' => $_POST['civilite'],
            ':adresse' => $_POST['adresse'],
            ':code_postal' => $_POST['code_postal'],
            ':ville' => $_POST['ville'],
        ));
    }//fin if !empty
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

    <title>La boutique - Inscription</title>
</head>

<body class="bg-dark">
    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1>La boutique - Inscrivez-vous !</h1>

                <form action="" method="POST" class="w-50 mx-auto">

                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?php echo $_POST['pseudo'] ?? ''; ?>" required>
                    </div>
                    ​
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" value="<?php echo $_POST['mdp'] ?? ''; ?>" required>
                        <small>Votre mot de passe doit contenir entre 8 et 20 caractères !</small>
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" required>
                    </div>
                    ​
                    <div class="form-group">
                        <label for="civilite">Sexe</label>
                        <select id="civilite" class="form-control" name="civilite">
                            <option selected>Votre sexe</option>
                            <option value="f">Femme</option>
                            <option value="h">Homme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $_POST['adresse'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="code_postal">Code postal</label>
                        <input type="number" class="form-control" name="code_postal" id="code_postal" value="<?php echo $_POST['code_postal'] ?? ''; ?>" required>
                    </div>
                    ​
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" value="<?php echo $_POST['ville'] ?? ''; ?>" required>
                    </div>
                    ​
                    <button type="submit" class="btn btn-small btn-info">Envoyer</button>
                </form>
            </div>
        </div>  <!-- fin de la rangée -->
    </main>

    <!-- JS DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>