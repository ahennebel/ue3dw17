<?php
include 'bdd.php';
$collection=$db->Users;
$users=$collection->find();

if (isset($_POST['pseudo']) && isset($_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password =$_POST['password'];
    $logged = false; 
    
    foreach($users as $u){    
        if ($pseudo == ($u['pseudo'])  && $password == ($u['password']))
            {
            session_start();
            $_SESSION['login'] = $_POST['pseudo'];
            $_SESSION['password'] = $_POST['password']; 
            $logged = true;
            }      
    }
    if($logged == true){
        header('Location: menu.php');
    }else{
        header('Location: index.html');
    }
}


    


