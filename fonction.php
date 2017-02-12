<?php

function Collection($c){
    $m = new MongoClient("mongodb://ahennebel:aurelie18@ds145009.mlab.com:45009/quizz");
    $db=$m->quizz;
    $collection=$db->$c;    
}

?>