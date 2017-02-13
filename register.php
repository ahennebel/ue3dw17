<?php
include 'bdd.php';
$collection=$db->Users;
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

if (isset($pseudo) && isset($password)) {   
    //On les entre dans la base de données
    $user=array('pseudo'=>$pseudo, 'password'=>$password ,'score'=>0, 'level'=>1);
    $collection->insert($user);

    session_start();
    $_SESSION['login'] = $_POST['pseudo'];
    $_SESSION['password'] = $_POST['password'];

    header('location: menu.php');

}
else
{    
    header('location: index.html');
}
