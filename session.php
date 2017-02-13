<?php session_start();?>
<?php include 'bdd.php'?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

if (isset ($_SESSION['login']) && isset ($_SESSION['password'])){    
    $collection=$db->Users;    
    $users=$collection->find();
    foreach($users as $u){
        if($_SESSION['login'] == $u['pseudo']){
            $login = $u['pseudo'];
            $score = $u['score'];
            $level = $u['level'];
        }
    }
    echo '<div id="profil">';
    echo '<h2>Profil</h2>';
    echo '<p>Pseudo :'.$login.'</p>';
    echo '<p>Score : '.$score.'</p>';
    echo '<p>Niveau :'.$level.'</p>';
    echo '<a href="logout.php">Se Deconnecter</a>';
    echo '</div>';
}
else
{
    print ('Votre session à expiré');
    header ('location: index.html');
}
echo '</br>';
?>


