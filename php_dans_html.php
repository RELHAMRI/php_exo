<!-- /** Exercice 9 : Balises PHP dans HTML
 * Objectif : Inclure une date dans le HTML
 *
 * 1 . Créer un fichier php_dans_html.php;
 *
 * 2 . Ecrire du code HTML avec un H1, un H2, et un paragraphe
 *
 * 3 . Utiliser PHP pour récupérer la date d'aujourd'hui et l'inclure dans le paragraphe HTML (chercher sur internet)
 */ -->


 <?php
    echo '<h1>Je suis ici<h1>
    <h2> et non, je suis ici</h2>
    <p style="color: blue; font-weight: bold; font-size: 25px;" > Tu m\'as trouvé!</p>';


    echo date('d-m-Y');
?>