<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        $questionsValide = array('status'=>'valide');
        $question=$collection->find($questionsValide);
        $i=1;        
        foreach($question as $q) {
            $idquestion=$q['_id'];
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
        }
        echo '<input type="submit" value="Valider les reponses"/>';
        echo '</form>'
        ?>
    </body>
</html>
