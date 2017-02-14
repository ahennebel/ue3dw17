<?php include 'session.php'?>
<?php include 'bdd.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzy</title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <div class="content">        
        <?php
        //A faire enregistrer les questions dans la BDD        
        $collection=$db->Questions;        
        
        $sujet = $_POST['question'];
        $proposition = $_POST['proposition'];
        $rang = $_POST['rang'];
        $reponse = $_POST['reponse'];
        $correcte = false;       
        
       
         for($i=0;$i<count($proposition);$i++){
            if($proposition[$i] == $reponse){                
                $correcte = true;
            }           
        }       
        if($correcte = true){
            $q=array('question'=>$sujet, 'propositions'=>$proposition, 'rang'=>$rang, 'reponse'=>$reponse, 'status'=>'en_attente');
            $collection->insert($q);
            echo "<p>Votre question a bien été soumise et pourra être validée par les autres utilisateurs !</p>";
        }else{
            echo '<p>Votre réponse ne correspond pas aux proposition réessayez !</p>';
        }
        
        
        ?>
        </div>
        <a href="menu.php">retour au menu</a><a href="valid.php">retour aux questions</a>
    </body>
</html>
