<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
<link type="text/css" rel="stylesheet" href="css/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liens</title>
</head>

<body>


    <?php
    include "menu.php";
    ?>
   <div id="conteneurliens">
        <h1>Voici quelque liens utiles</h1>
           <div id="liens"> 
               <h2>w3c validator</h2>

                <div class="flex"><img src="img/w3c.png" alt=""/><a href="https://validator.w3.org/" target="_blank">
                
                
                    W3C est un validateur du World Wide Web Consortium qui permet aux utilisateurs
                    Internet de vérifier les documents HTML et XHTML pré-HTML5 pour un balisage
                    bien formé par rapport à une définition de type de document.
                    </a></div>
            </div>
            <div id="liens">
                <h2>MDN</h2>
               <div class="flex"><img src="img/mdn.png" alt=""/><a href="https://developer.mozilla.org/fr/" target="_blank">
                
               
                   MDN Web Docs, précédemment Mozilla Developer Network et anciennement Mozilla Developer
                    Center, est un dépôt de documentation et une ressource d'apprentissage pour les développeurs 
                    web utilisés par Mozilla, Microsoft, Google et Samsung.
               </a></div>
            </div>
            <div id="liens"> 
                <h2>php.net</h2>
                <div class="flex"><img src="img/php.png" alt=""/> <a href="https://www.php.net/" target="_blank">
                    PHP.net est un dépôt de documentation et une ressource d'apprentissage pour les développeurs 
                    web utilisés pour le php
                </a></div>
            </div>
            <div id="liens">
                    <h2>Github</h2>
                    <div class="flex"><img src="img/git.png" alt=""/><a href="https://github.com/" target="_blank">
                        Github est une entreprise de développement
                         logiciel et de service dont le siège est situé aux États-Unis.
                          Github développe notamment la plateforme Github, l'éditeur de texte Atom
                           ou encore le framework
                    </a></div>
            </div>
   </div>
</body>

</html>