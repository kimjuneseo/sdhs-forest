<?php

namespace src\Controller;

class Item{
    function write(){
        extract($_POST);
        if($title == '' || $content == ''){
            back('제목과 내용은 공백이 될 수 없습니다.');
            return;
        }
        
        $user_idx = $_SESSION['user']->idx;
        
        // var_dump(count($_FILES['img']));
        // foreach($_FILES as $item){
        //     $fileType = explode("/",$item['img']['type']);
        //     $resFile = "./upload/$imgName.$fileType[1]";
        //     var_dump($item);
        // }
        
        query("insert into `content_tbl` (user_idx, title, content, imgs) values(?,?,?)", [$user_idx, $title, $content]);
        
        
        
    }
}