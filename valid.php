<?php include 'session.php'?>
<?php include 'bdd.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzy , questions à valider</title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <h1>Questions à valider</h1>
        <div class="content">
            <h2>Voici les questions du quizz en attente de validation selectionner une action puis valider :</h2>
            <?php            
            $collection=$db->Questions;
            $questionsValide = array('status'=>'en_attente');        
            $question=$collection->find($questionsValide);

            $i=1;

            foreach($question as $q) {
                    echo '<div id="valid">';
                    echo '<p>'.$i.' - '.$q['question'].' '.'( Niveau : '.$q['rang'].')'.'</p>';
                    $proposition= $q['propositions'];
                    foreach($proposition as $p){
                            print '<p class="proposition">'.$p . '</p>';
                    }
                    $i = $i +1;
                    $contenu = $q['_id'];
                    echo '<form class="valid" method="post" action="validquestion.php">';
                    echo '<input type="hidden" name="question" value='.$contenu.'>';
                    echo '<input class="valider" type="submit" name="action" value="valider" />';                
                    echo '</form>'; 
                    echo '<form class="valid" method="post" action="validquestion.php">';
                    echo '<input type="hidden" name="question" value='.$contenu.'>';
                    echo '<input class="supprimer" type="submit" name="action" value="supprimer" />';
                    echo '</form></br>';
                    echo '</div>';
            }        
            ?>
        </div>
    </body>
</html>
