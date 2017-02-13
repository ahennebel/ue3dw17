<?php include 'session.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Créer une question</title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <form id="submit" method="post" action="newquestion.php">
            <label>Votre question<input type="text" name="question"/></label></br>
            <label>1er choix de réponse : <input type="text" name="proposition[]"/></label></br>
            <label>2 ème choix de réponse : <input type="text" name="proposition[]"/></label></br>
            <label>3 ème choix de réponse : <input type="text" name="proposition[]"/></label></br>
            <label>Bonne réponse : <input type="text" name="reponse"/></label></br>
            <p>Difficulté de la question :</p>
            <label class="radio"><input type="radio" name="rang" value=1/>1</label>
            <label class="radio"><input type="radio" name="rang" value=2/>2</label>
            <label class="radio"><input type="radio" name="rang" value=3/>3</label>
            <label class="radio"><input type="radio" name="rang" value=4/>4</label>
            <label class="radio"><input type="radio" name="rang" value=5/>5</label>
            <label class="radio"><input type="radio" name="rang" value=6/>6</label>
            <label class="radio"><input type="radio" name="rang" value=7/>7</label>
            <label class="radio"><input type="radio" name="rang" value=8/>8</label>
            <label class="radio"><input type="radio" name="rang" value=9/>9</label>
            <label class="radio"><input type="radio" name="rang" value=10/>10</label></br>
            <input type='submit' value="Soumettre la question"/>
            <a href="menu.php" class="quitter">Quitter</a>
        </form>
       
    </body>
</html>
