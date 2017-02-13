<?php
include 'bdd.php';
$collection=$db->Users;
$users=$collection->find();

if (isset($_POST['pseudo']) && isset($_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password =$_POST['password'];
    session_start();
    $_SESSION['login'] = $_POST['pseudo'];
    $_SESSION['password'] = $_POST['password'];    
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
    


