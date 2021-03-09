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

    <title>Cours PHP7 - Introduction</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="bg-dark">
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - Intro</h1>
        <p class="lead">PHP signifie aujourd'hui PHP HYpertext Preprocessor</p>
    </div>

    <div class="row">
        <div class="col-sm-2 aside">
         <?php
          require('../inc/sidenav.inc.php'); //ici on appelle la page sidenav.inc.php (menu)
         ?> 
        </div>
        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">
              <div class="row">
                <hr>
                <h2 class="col-sm-12 text-center">1 - Intro</h2>
                <div class="col-sm-12 col-lg-4">
                  <p>Pour parvenir à la réalisation de sites dynamiques, nous allons aborder successivement les points suivants : </p>
                  <ul>
                    <li>De connaître la syntaxe et les caractéristiques du langage PHP</li>
                    <li>Les notions essentielles du langage SQL, permettant la création et la gestion d'une BDD et la réalisation des requêtes de base</li>
                    <li>Le fonctionnement et la réalisation de BDD MySQL et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou objet)</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <p>PHP  permet  en  outre  de  créer  des  pages  interactives.  Une  page  interactive permet  à  un  visiteur  de  saisir  des données  personnelles.  Ces  dernières  sont ensuite transmises au serveur, où elles peuvent rester stockées dans une base de données pour être diffusées vers d'autres utilisateurs. Un visiteur peut, par exemple, s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieure. Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. En associant toutes ces caractéristiques, il est possible de créer aussi bien des sites de diffusion et de collecte d'information que des sites d'e-commerce, de rencontres ou des blogs.</p>
                </div>
                <div class="col-sm-12 col-lg-4">
                <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une base de données, généralement MySQL mais aussi SQLite, et sur desserveurs Apache. PHP, MySQL et Apache forment d'ailleurs le trio ultra dominant sur les serveurs Internet. Quand ce trio est associé sur un serveur à Linux, on parle de système LAMP (Linux, Apache, MySQL, PHP).PHP est utilisé aujourd'hui par plus des trois quarts des sites dynamiques de la planète et par les trois quarts des grandes entreprises françaises. Pour un serveur Windows, on parle de système WAMP, mais ceci est beaucoup moins courant.</p>
                </div>
              </div><!-- fin de la rangée -->

              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <p>Avec le code suivant écrit dans un fichier nommé info.php, placé dans le serveur d'évaluation, on obtient toutes les infos sur le PHP exécuté dans ce serveur. <br>
                  <code>&lt;?php <br>
                  phpinfo(); <br>
                  ?></code></p>
                 <div class="alert alert-success">
                    <?php  
                      echo "<p>Bienvenue sur le cours PHP7</p>";
                    ?>
                    <?php
                    echo "<p> Aujourd'hui, nous sommes le " .date('d/m/Y')."</p>";
                    ?>
                 </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <h3>a) Le cycle de vie d'une page PHP</h3>
                  <ul>
                    <li>Envoi d'une requête HTML par le navigateur client vers le serveur du type http://www.monserveur.fr.page.php </li>
                    <li>Interprétation par le serveur du code PHP contenu dans la page appelée.</li>
                    <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML</li>
                  </ul>
                  <a class="btn btn-primary btn-lg" href="info.php" role="button">Voir info.php</a>
                </div>
              </div><!-- fin de la rangée -->
              <hr>

              <div class="row">
                <div class="col-sm-12">
                  <h2 class="text-center">2 - Inclure des fichiers externes</h2>
                  <table class="table table-striped" id="tableau1">
                    <thead>
                      <tr>
                        <th scope="col">Fonction</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>include("nom-fichier.php")</td>
                        <td>Lors de son interprétation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre, dont vous fournissez le nom et éventuellement l'adresse complète. En cas d'erreur, par exemple si le fichier n'est pas trouvé, include() ne génère qu'une alerte (un warning), et le script continue.</td>
                      </tr>
                      <tr>
                        <td>require("nom-fichier.php")</td>
                        <td>A désormais un comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur fatale et met fin au script.</td>
                      </tr>
                      <tr>
                        <td>include_once("nom-fichier.php") <br>
                            require_once("nom-ficier.php")</td>
                        <td>Contrairement aux deux précédentes, ces fonctions ne sont pas exécutées plusieurs fois, même si elles figurent dans une boucle ou si elles ont déjà été exécutées une fois dans le code qui précède.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!-- fin de la rangée -->

            <br><br>

            </main>
        </div> <!-- fin de la partie principale, col-8 -->
        
        <div class="col-sm-2 aside">
        
        </div>
    </div>
    
    <?php
      require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
   
  </body>
</html>