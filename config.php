<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of app
 *
 * @author Aurelie pc neuf
 */
class config {
    private $set_Login;
    private $set_AddQuestion;
    private $set_RemoteQuestion;
    private $set_ModifyQuestion;
    private $set_AddUser;
    private $set_ModifyUser;
    private $get_UserPseudo;
    private $get_UserPassword;
    private $get_Question;
    private $get_QuestionReponse;
    private $get_QuestionRang;
}

public function connect(){
    $m = new MongoClient("mongodb://<dbuser>:<dbpassword>@ds145009.mlab.com:45009/quizz");
    $db=$m->quizz;
    } 