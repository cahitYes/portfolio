<?php

if(isset($_POST["nom"])  
&& isset($_POST["prenom"]) 
&& isset($_POST["email"]) 
&& isset($_POST["msg"])  ){
    $name = strip_tags(trim($_POST["nom"]));
    $prenom = strip_tags(trim($_POST["prenom"]));
    $mail = filter_var(strip_tags(trim($_POST["email"])), FILTER_VALIDATE_EMAIL);
    $message = strip_tags(trim($_POST["msg"]));


    if($name && $mail && $prenom && $message)
    {
        $to= MY_EMAIL;
        $subject= " Message de la part de $name";
        $msg= $message;
        $header= [
            "From" => $mail,
            "Reply_to" => $mail,
            "X-mailer" => "PHP/" . phpversion()
        ];
        mail($to,$subject, $msg,$header);
        $toUser= $mail;
        $subjectUser= " Merci $name de m'avoir écrit ";
        $messageUser= "Merci $name $prenom de m'avoir écrit, je reviens vers vous au plus vite";
        $headerUser= [
            "From" => MY_EMAIL,
            "Reply_to" => MY_EMAIL,
            "X-mailer" => "PHP/" . phpversion()
        ];
        mail($toUser,$subjectUser, $messageUser,$headerUser);
    }
    else
    {
        echo"error";
    }
}
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
    <?php
         include "menu.php";
    ?>
   
 
        <div> <h2>Pour me contacter</h2></div>
        <form method="post" action="">
            <label for="nom">Nom :</label>
                 <input type="text" id="nom" name="nom" value="" placeholder="nom ?" required />
        <br />
            <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" value="" placeholder="prénom ?"required  />
        <br /> 
            <label for="email">E-mail :</label>
             <input type="text" id="email" name="email" value="" placeholder="E-mail ?"required  />
        <br />
            <label for="msg">Message:</label>
            <textarea name="msg" id="msg" rows="5" cols="50" required></textarea>
        <br />
           <div> <input  type="submit" value="Envoyez votre message" /></div>
        </form>

</body>

</html>