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
    print $u['pseudo']." ".$u['password'];
    if ($pseudo == $u['pseudo']  && $password == $u['password'] )
        {
        header('Location: http://localhost/ue3dw17/menu.html');
        }
    else //On renvoi l'utilisateur avec un message alert sur la page de login
        {
        header('Location: http://localhost/ue3dw17/index.html');
        }
 }   
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

