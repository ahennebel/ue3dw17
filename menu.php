
<?php include 'session.php' ?>
<html>
    <head>
        <title>Quizzy : le Quizz de culture générale</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>      
        
        
        <h1>Menu principal</h1>
        <form method='post' action='submit.php'>
            <label>Créer une question : </label><input type="text"><input type ="submit" value="Enregistrer"/>  
        </form>
        <a href="submit.php">Ajouter une question</a>
        <a href="valid.php">Valider des questions</a>
        <a href="quizz.php">Commencer le Quizz Culturel</a>
       
    </body>    
</html>
