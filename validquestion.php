<?php include 'session.php'?>
<?php include 'bdd.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        ob_start();
        $intitule = $_POST['question']; 
        $requete = $_POST['action'];       
        
        $collection=$db->Questions;
        $questionsValide = array('_id'=>$intitule);        
        $question=$collection->find($questionsValide);       
        
               
        foreach($question as $q){            
            $contenu = $q['question'];
        }
        
        if($requete == 'valider'){
        $collection->update(array('question'=>$contenu),array('$set'=>array('status'=>'valide')));
        print 'La question a bien été validée';
        
        }
        else {
            if($requete == 'supprimer'){
            $collection->remove(array('question'=>$contenu));
            print 'La question a bien été supprimée';
            }else{
            print 'une erreur est survenue';
            }
        }
        print 'Vous allez être redirigé dans 5 secondes ...';
        header ('Refresh:5; url=valid.php');
        ob_flush();
        ?>
    </body>
</html>
