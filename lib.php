<?php

spl_autoload_register(function($r){
    str_replace("\\/", "/", $r);
    require_once("../$r.php");

});

function view($fileName, $data=[]){
    extract($data);
    require_once "../src/View/header.php";
    require_once "../src/View/$fileName.php";
    require_once "../src/View/footer.php";
}

function script($text){
    echo "<script>$text</script>";
}

function alert($t = "") {
    !empty($t) && script("alert('$t');");
}

function go($fileName, $text=''){
    alert($text);
    script("location.replace('$fileName'); ");
}
function back($text = ''){
    alert($text);
    script("history.back();");
}

function ss() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}

function loginCheck(){
    if(!ss()){
        back('로그인 후 이용가능한 서비스 입니다.');
        return false;
    }
    return true;
}