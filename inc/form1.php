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