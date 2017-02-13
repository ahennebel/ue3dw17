<?php include 'session.php'?>
<?php include 'bdd.php'?>
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
        <div class="content">
            <ul>
                <li>Temps réalisé : <?php print $temps;?> sec</li>
                <li>Votre niveau : <?php print $level;?></li>
                <li>Nombre de bonnes réponses : <?php print $bon ;?></li>
                <li>Votre nouveau score : <?php print $score; ?> </li>
            </ul>
            <a href="quizz.php" class="recommencer">Recommencer</a>
            <a href="menu.php" class="quitter">Quitter</a>
        </div>
    </body>
</html>
