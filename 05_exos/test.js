function myFunction(){
    var prix = Number(prompt('Quel est le prix de votre objet ?'));
    location.href='01-exo.php?prixObject'+prix;
    console.log(prix);
}