<div class="alert alert-success w-75 mx-auto text-center">
<form action="#" method="GET">
    <label for="prix">Combien avez-vous payé votre objet ?</label>
    <input type="text" name="prix"> <br>
    <input type="submit" name="submit">
</form>

<?php 
    if (isset( $_GET['submit'] ) ) {
        $prix = $_GET['prix']; 
        $discount1 = 0.05;
        $discount2 = 0.1;
        $cinqpourcent = $prix * $discount1;
        $dixpourcent = $prix * $discount2;

        if ($prix>100) {
            echo "<p>Vous avez une remise de $dixpourcent €.</p>";
        }else {
            echo "<p>Vous avez une remise de $cinqpourcent €.</p>";
        }
    }
?> 
</div>