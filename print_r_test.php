<!-- /** Exercice 5 : print_r()
 *  Objectif : savoir utiliser la fonction print_r()
 * 
 *  1 . Créer un fichier print_r_test.php;
 * 
 *  2 . Déclarer un tableau associatif $personne avec les clés 'nom' et 'age' (les valeurs sont libre de choix)
 * 
 *  3 . Utiliser print_r() avec en paramètre le tableau pour afficher le contenu du tableau
 * 
 */ -->

 <?php
$personne = array(
    "nom" => 'ELHAMRI',
    "age" => 27,
);

print_r($personne);

 ?>