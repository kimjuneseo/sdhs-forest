<?php

namespace src\Controller;
class View{
    function index(){
        $content = fetchAll("select * from content_tbl order by idx desc");

        view('index', ["content"=>$content]);
    }
    function signup(){
        view('signup');
    }
    function login(){
        view('login');
    }
    function write(){
        view("itemWrite");
    }
}

