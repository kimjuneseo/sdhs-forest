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
        var_dump($content);
        query("insert into `content_tbl` (`user_idx`, `title`, `content`) values (?,?,?)", [$user_idx, $title, $content]);                
        back("글 등록이 완료 되었습니다");
    }
}