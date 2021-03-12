<?php 
    //une première fonction
    function minPap(){
        echo "<p class=\"lead\">Minute papillon !</p>";
    } 
    //fonction pour afficher le jour de la semaine 
    function quelJour(){
        setlocale(LC_ALL, 'fr_FR');
        echo "<p class=\"alert alert-success w-50 mx-auto text-center\">Nous sommes ". strftime('%A %e %B %Y') .".</p>";
        echo "<p class=\"alert alert-success w-50 mx-auto text-center\">We are ". date("l j F Y") .".</p>";
    }
?> 