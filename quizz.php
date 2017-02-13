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
                $v=1;
                    foreach($proposition as $p){
                        if ($p === $q['reponse']){
                            echo '<label>'.$p.'<input type="checkbox" id="check'.$v.'" class="unlock" name="win[]" onclick="call('.$v.',this)" ></label></br>'; 
                        }
                        else{
                            echo '<label>'.$p.'<input type="checkbox" id="check'.$v.'" class="unlock" name="lose" onclick="call('.$v.',this)" ></label></br>';
                        }
                        $v=$v+1;
                    }
                $i=$i+1;
                if($i >= 11){
                    break;
                }
                echo '</fieldset>';
                echo '</br>';
            
        }
        echo '<input type="submit" value="Valider les reponses"/><a href="menu.php" class="quitter">Quitter</a>';
        echo '</form>'
        ?>
        
        </div>
        
        <script type="text/javascript">
            function call(no, value) {
                if(no== 1){
                    document.getElementById('check2').checked = false;
                    document.getElementById('check3').checked = false;     
                }
                else if(no== 2){
                    document.getElementById('check1').checked = false;
                    document.getElementById('check3').checked = false; 
                }
                else if(no== 3){
                    document.getElementById('check1').checked = false;
                    document.getElementById('check2').checked = false; 
                }
            }
        </script>
    </body>
</html>
