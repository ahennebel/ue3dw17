<?php include 'session.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="newquestion.php">
            <label>Votre question<input type="text" name="question"/></label></br>
            <label>1er choix de réponse : <input type="text" name="proposition[]"/></label></br>
            <label>2 ème chois de réponse : <input type="text" name="proposition[]"/></label></br>
            <label>3 ème choix de réponse : <input type="text" name="proposition[]"/></label></br>
            <label>Bonne réponse : <input type="text" name="reponse"/></label></br>
            <p>Difficulté de la question :</p>
            <label><input type="radio" name="rang" value=1/>1</label>
            <label><input type="radio" name="rang" value=2/>2</label>
            <label><input type="radio" name="rang" value=3/>3</label>
            <label><input type="radio" name="rang" value=4/>4</label>
            <label><input type="radio" name="rang" value=5/>3</label>
            <label><input type="radio" name="rang" value=6/>3</label>
            <label><input type="radio" name="rang" value=7/>3</label>
            <label><input type="radio" name="rang" value=8/>3</label>
            <label><input type="radio" name="rang" value=9/>3</label>
            <label><input type="radio" name="rang" value=10/>3</label></br>
            <input type='submit' value="Soumettre la question"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
