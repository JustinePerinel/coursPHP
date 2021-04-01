<?php 
    require_once('../inc/functions.php');

    // jevar_dump($_POST);
    // if(!empty($_POST)) {​
        // echo "<p>Prénom : " .$_POST['prenom']. "</p>";
        // echo "<p>Nom : " .$_POST['nom']. "</p>";
        // echo "<p>Email : " .$_POST['email']. "</p>";
        // echo "<p>Adresse : " .$_POST['adresse']. "</p>";
        // echo "<p>Code postal : " .$_POST['code_postal']. "</p>";
        // echo "<p>Ville : " .$_POST['ville']. "</p>";​
        // //on va écrire le contenu de la super globale dans un fichier texte en l'absence de BDD​
        // $file = fopen('formulaire.txt', 'a'); // fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon cela permet de l'ouvrir
        // $donneeformulaire = $_POST['prenom']. " " .$_POST['nom']. " // email : " .$_POST['email']. " // adresse : " .$_POST['adresse']. " // code postal : " .$_POST['code_postal']. " // ville : " .$_POST['ville']. "\n"; // \n pour faire des sauts de ligne dans le .txt
        
        // fwrite ($file, $donneeformulaire);
    // } // fin if !empty

    if (!empty($_POST)){
        echo  "<p> Prénom : " .$_POST['prenom']. " </p>";
        echo  "<p> Nom : " .$_POST['nom']. " </p>";
        echo  "<p> Email : " .$_POST['email']. " </p>";
        echo  "<p> Adresse : " .$_POST['adresse']. " </p>";
        echo  "<p> Code postal : " .$_POST['code_postal']. " </p>";
        echo  "<p> Ville : " .$_POST['ville']." </p>";
        // on va écrire le contenu de la super globale dans un fichier texte en l'absence de BDD
        $fichier = fopen('formulaire.txt', 'a'); // fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon cela permet de l'ouvrir
        $donneeformulaire = $_POST['prenom']. " " .$_POST['nom']. " // email : " .$_POST['email']. " adresse : " .$_POST['adresse']. " " .$_POST['code_postal']. " " .$_POST['ville']. "\n"; // \n pour faire des sauts de ligne dans le .txt
        fwrite($fichier, $donneeformulaire);
        }
?>