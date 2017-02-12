<?php include 'session.php'?>
<?php $_SESSION['heure_debut'] = date('s');?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzy : En avant pour le Quizz</title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <div class="content">
        <h1>Quizz de culture générale :</h1>
        <?php
        $m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
        $db=$m->quizz;
        $collection=$db->Questions;
        $questionsValide = array('rang'=>$level, 'status'=>'valide');        
        $question=$collection->find($questionsValide);

        $i=1;
        
        foreach($question as $q) {
                echo '<form method="post" action="results.php">';
                echo '<label>'.$i.' - '.$q['question'].'<input type="hidden" name="question[]" value="'.$q['question'].'" ></label>';              
                
    /*On liste les propositions pour chaque question en checkbox et on identifie la reponse*/            
                $proposition= $q['propositions'];
                    foreach($proposition as $p){
                        if ($p === $q['reponse']){
                            echo '<label>'.$p.'<input type="checkbox" name="win[]" ></label></br>'; 
                        }
                        else{
                            echo '<label>'.$p.'<input type="checkbox" name="lose"/></label></br>';
                        }
                    }
                $i=$i+1;
                if($i >= 11){
                    break;
                }
                echo '</br>';
            
        }
        echo '<input type="submit" value="Valider les reponses"/>';
        echo '</form>'
        ?>
        </div>
    </body>
</html>
