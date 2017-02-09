<?php
$m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
$db=$m->quizz;
$collection=$db->Users;

if (isset($_POST['login']) && isset($_POST['password'])) {
    //On stocke les données du formulaire
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    //On les entre dans la base de données
    $user=array('pseudo'=>'$pseudo', 'password'=>'$password','score'=>0);
    $collection->insert($user);

    session_start();
    $_SESSION['login'] = $_POST['pseudo'];
    $_SESSION['password'] = $_POST['password'];

    header('location: menu.html');

}else{    
    header('location: index.html');
}
