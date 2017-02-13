<?php include 'session.php'?>
<?php include 'bdd.php'?>
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
        $collection=$db->Questions;
        $questionsValide = array('rang'=>$level, 'status'=>'valide');        
        $question=$collection->find($questionsValide);

        $i=1;
        
        echo '<form id="quizz" method="post" action="results.php">';
        foreach($question as $q) {
                echo '<fieldset>';
                echo '<legend>'.$i.' - '.$q['question'].'<input type="hidden" class="question" name="question[]" value="'.$q['question'].'" ></legend>';              
                
    /*On liste les propositions pour chaque question en checkbox et on identifie la reponse*/            
                $proposition= $q['propositions'];
                    foreach($proposition as $p){
                        if ($p === $q['reponse']){
                            echo '<label>'.$p.'<input type="checkbox" class="choix" name="win[]" onclick="Check()" ></label></br>'; 
                        }
                        else{
                            echo '<label>'.$p.'<input type="checkbox" class="choix" name="lose" onclick="Check()" ></label></br>';
                        }
                    }
                $i=$i+1;
                if($i >= 11){
                    break;
                }
                echo '</fieldset>';
                echo '</br>';
            
        }
        echo '<input type="submit" value="Valider les reponses"/>';
        echo '</form>'
        ?>
        </div>
        <script type="text/javascript">
            function Check(){
                
                if (document.getElementByClassName("choix").checked){
                    document.getElementByClassName("choix").className = "validate";
                }
            }
        </script>
    </body>
</html>
