<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

if (isset ($_SESSION['login']) && isset ($_SESSION['password'])){
    $m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
    $db=$m->quizz;
    $collection=$db->Users;    
    $users=$collection->find();
    foreach($users as $u){
        if($_SESSION['login'] == $u['pseudo']){
            $login = $u['pseudo'];
            $score = $u['score'];
        }
    }
}
else
{
    print ('Votre session à expiré');
    header ('location: index.html');
}    
?>
<html>
    <head>
        <title>Quizzy : le Quizz de culture générale</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        
        <h2>Joueur :</h2>
        <p>Pseudo : <?php echo $login ;?></p>
        <p>Score : <?php echo $score;?></p>
        <h1>Menu principal</h1>
        <form method='post' action='submit.php'>
            <label>Créer une question : </label><input type="text"><input type ="submit" value="Enregistrer"/>  
        </form>
        <a href="quizz.php">Commencer le Quizz Culturel</a>
       
    </body>    
</html>
