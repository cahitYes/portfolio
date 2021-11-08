<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact</title>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>

    <h1>contact</h1>
    <?php
    include "menu.php";
    ?>
        <div> <h2>Pour me contacter</h2></div>
        <form>
            <label for="nom">Nom :</label>
                 <input type="text" id="nom" name="nom" value="" placeholder="nom ?"  />
        <br />
            <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" value="" placeholder="prénom ?"  />
        <br /> 
            <label for="email">E-mail :</label>
             <input type="text" id="email" name="email" value="" placeholder="E-mail ?"  />
        <br />
            <label for="msg">Message:</label>
            <textarea name="msg" id="msg" rows="5" cols="50" ></textarea>
        <br />
           <div> <input  type="submit" value="Envoyez votre message" /></div>
        </form>

</body>

</html>