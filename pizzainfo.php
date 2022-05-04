<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pizza.css">
    <title>Document</title>
</head>

<body>

<?php
        require 'pizza.php';
        $nomPizza= $_POST['nom'];


        function thePizza ($commande){
            global $pizzas;
            foreach ($pizzas as $choix) {
                echo"<p>Voici votre pizza: {$pizzas[$commande-1][0]}</p>";
                echo"<p>Ingrédients: {$pizzas[$commande-1][1]}</p>";
                echo"<p>Prix: {$pizzas[$commande-1][2]}</p>";
                break;
            }
        }
        
        thePizza($nomPizza);
    ?>


    <form action="pizzamenu.php" method='POST'>
        <button type="submit">Retour à la carte</button>
    </form>


</body>
</html>

