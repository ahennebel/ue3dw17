<?php
$m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
$db=$m->quizz;
$collection=$db->Users;
$users=$collection->find();

if (isset($_POST['pseudo']) && isset($_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password =$_POST['password'];    
}

foreach($users as $u){    
    if ($pseudo == ($u['pseudo'])  && $password == ($u['password']))
        {
        header('Location: menu.php');
        }
    else //On renvoi l'utilisateur avec un message alert sur la page de login
        {
        header('Location: index.html');
        }
 }   
    


