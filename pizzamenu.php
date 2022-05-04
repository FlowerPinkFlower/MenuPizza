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





    <ol>
            <?php
                require 'pizza.php';
                foreach ($pizzas as $choix => $value) {
                    echo"<li>{$pizzas[$choix][0]}</li>";
                }
                
            ?>
    </ol>   


    <form action="pizzainfo.php" method='POST'>
        <label for="champs1">Entrer le numéro de votre commande</label>
        <input id="champs1" type="number" name="nom"></input>
        <button type="submit" >Commande</button>
    </form>


</body>
</html>