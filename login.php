<?php
if (isset($_POST['pseudo']) && isset($_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password =$_POST['password'];
    
}
if ($pseudo == ahennebel  && $password == )
    {
    header('Location: http://localhost/ue3dw17/');
    }
else //On renvoi l'utilisateur avec un message alert sur la page de login
    {
    header('Location: http://localhost/ue3dw17/indexbis.html');
    }
    
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

