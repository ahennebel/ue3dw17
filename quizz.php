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
                            echo '<label>'.$p.'<input type="checkbox" id="choix" class="unlock" name="win[]" onclick="Disabled(this)" ></label></br>'; 
                        }
                        else{
                            echo '<label>'.$p.'<input type="checkbox" id="choix" class="unlock" name="lose" onclick="Disabled(this)" ></label></br>';
                        }
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
            function Disabled(mycheckbox){
                
                    if (mycheckbox.checked){
                        document.getElementById("choix").className = "lock";                        
                    }
                    document.getElementsByClassName("unlock").setAttribute("disabled", true);
                
            }
        </script>
    </body>
</html>
