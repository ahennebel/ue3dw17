<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Quizz terminé voici vos resultats :</h1>
        <p>Nom du joueur :</p>
        <p>Temps réalisé :</p>
        <p>Votre niveau :</p>        
        <?php  
        $score=0;         
        $winner = $_POST['win'];                
        for($i=0;$i<count($winner);$i++){            
        if ($winner[$i] == "on"){                
                $score=$score + 1;
            }            
        }
        ?>
        <p>Votre score : <?php print $score; ?> /10 </p>
        <a href="quizz.php">Recommencer</a>
    </body>
</html>
