<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzy , questions à valider</title>
    </head>
    <body>
        <h1>Questions à valider</h1>
        <p>Voici les questions du quizz en attente de validation selectionner une action puis valider :</p>
        <?php
        $m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
        $db=$m->quizz;
        $collection=$db->Questions;
        $questionsValide = array('status'=>'en_attente');        
        $question=$collection->find($questionsValide);
        
        $i=1;
        
        foreach($question as $q) {            
                echo $i.' '.$q['question'].' '.'Niveau : '.$q['rang'].'</br>';
                $proposition= $q['propositions'];
                foreach($proposition as $p){
                        print $p . '  ';
                }
                $i = $i +1;
                $contenu = $q['_id'];
                echo '<form method="post" action="validquestion.php">';
                echo '<input type="hidden" name="question" value='.$contenu.'>';
                echo '<input type="submit" name="action" value="valider" />';                
                echo '</form>'; 
                echo '<form method="post" action="validquestion.php">';
                echo '<input type="hidden" name="question" value='.$contenu.'>';
                echo '<input type="submit" name="action" value="supprimer" />';
                echo '</form></br>';                
        }        
        ?>
    </body>
</html>
