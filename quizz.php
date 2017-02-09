<?php include 'session.php'?>
<?php $_SESSION['heure_debut'] = date('s');?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzy : En avant pour le Quizz</title>
    </head>
    <body>
        <h1>Quizz de culture générale :</h1>
        <?php
        $m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
        $db=$m->quizz;
        $collection=$db->Questions;
        $questionsValide = array('rang'=>$level);        
        $question=$collection->find($questionsValide);
        //$randomquestion=array_rand($question,10);
        //print $randomquestion;
        $i=1; 
        
        foreach($question as $q) {            
                echo $i.' '.$q['question'].'</br>';
                echo '<form method="post" action="results.php">';
    /*On liste les propositions pour chaque question en checkbox et on identifie la reponse*/            
                $proposition= $q['propositions'];
                    foreach($proposition as $p){
                        if ($p === $q['reponse']){
                            echo '<label>'.$p.'<input type="checkbox" name="win[]"/></label></br>'; 
                        }
                        else{
                            echo '<label>'.$p.'<input type="checkbox" name="lose"/></label></br>';
                        }
                    }
                $i=$i+1;
                echo '</br>';
            
        }
        echo '<input type="submit" value="Valider les reponses"/>';
        echo '</form>'
        ?>
    </body>
</html>
