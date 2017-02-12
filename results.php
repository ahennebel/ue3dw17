<?php include 'session.php'?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <?php $_SESSION['temps_fin']= date('s')?>;
        <h1>Quizz terminé voici vos resultats :</h1>        
                
        <?php
        $debut = $_SESSION['heure_debut'];
        $fin = $_SESSION['temps_fin'];
        $temps = $fin - $debut;
        $bon = 0;
        $winner = $_POST['win'];                
        for($i=0;$i<count($winner);$i++){            
        if ($winner[$i] == "on"){                
                $bon=$bon + 1;
            }            
        }
        $score = $score + $bon;
        $collection->update(array('pseudo'=>$login),array('$set'=>array('score'=>$score)));
        if($temps<=10 && $score==10)
        {
          $collection->update(array('pseudo'=>$login),array('$set'=>array('level'=>$level +1)));  
        }
        ?>
        <p>Temps réalisé : <?php print $temps;?> sec</p>
        <p>Votre niveau : <?php print $level;?></p>
        <p>Nombre de bonnes réponses : <?php print $bon ;?></p>
        <p>Votre nouveau score : <?php print $score; ?> </p>
        <a href="quizz.php">Recommencer</a>
    </body>
</html>
