<?php include 'session.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="newquestion.php">
            <label>Votre question<input type="text" name="question"/></label></br>
            <label>1er choix de réponse : <input type="" name="proposition[]"/></label></br>
            <label>2 ème chois de réponse : <input type="" name="proposition[]"/></label></br>
            <label>3 ème choix de réponse : <input type="" name="proposition[]"/></label></br>
            <p>Difficulté de la question :</p>
            <label><input type="radio" name="rang" value="1"/>1</label>
            <label><input type="radio" name="rang" value="2"/>2</label>
            <label><input type="radio" name="rang" value="3"/>3</label>
            <label><input type="radio" name="rang" value="4"/>4</label></br>
            <input type='submit' value="Soumettre la question"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
