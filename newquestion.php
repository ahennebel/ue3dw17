<?php include 'session.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzy</title>
    </head>
    <body>
        <h1>Merci !</h1>        
        <?php
        //A faire enregistrer les questions dans la BDD
        $m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
        $db=$m->quizz;
        $collection=$db->Questions;        
        
        $sujet = $_POST['question'];
        $proposition = $_POST['proposition'];
        $rang = $_POST['rang'];
        $reponse = $_POST['reponse'];
        
        for($i=0;$i<count($proposition);$i++){
            if($proposition[$i]==$reponse){
                $q=array('question'=>$sujet, 'propositions'=>$proposition, 'rang'=>$rang, 'reponse'=>$reponse);
                $collection->insert($q);
                echo "<p>Votre question a bien été soumise et pourra être validée par les autres utilisateurs !</p>";
            }
            else
            {
                echo "<p>Vous devez écrire une réponse correcte</p>";
                break;                
            }
        }       
        
        
        
        ?>
        
        <a href="menu.php">retour au menu</a>
    </body>
</html>
