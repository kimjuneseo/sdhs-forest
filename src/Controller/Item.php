<?php

namespace src\Controller;

class Item{
    function write(){
        if(loginCheck()){        
            extract($_POST);
            if($title == '' || $content == ''){
                back('제목과 내용은 공백이 될 수 없습니다.');
                return;
            }
            
            $user_idx = $_SESSION['user']->idx;
            query("insert into `content_tbl` (`user_idx`, `title`, `content`) values (?,?,?)", [$user_idx, $title, $content]);                
            go("/","글 등록이 완료 되었습니다");
        }
    }
    function goodInsert($parm){
        $idx = $parm[1];
        header('HTTP/1.1 200 ok');
        header('Content-Type: application/json; charset=UTF-8');

        $response = (object) [];
        query("isnert into `good_tbl` (`user_idx`, `content_idx`) values(?,?)", [$_SESSION['user']->idx, $idx]);
        $cnt =  fetch("select cnt(*)  from `good_tbl` where content_idx = ?", $idx);
        var_dump($cnt);
        
    }
    function more($parm){
        $item = fetch("select * from `content_tbl` where idx = ?", [$parm[1]]);
        $comment = fetchAll("SELECT `name`,`content`, `profile` FROM `comment_tbl` a INNER JOIN `user_tbl` b on a.user_idx = b.idx WHERE a.item_idx = ?", [$parm[1]]);

        $allGood = fetch("SELECT COUNT(*) cnt from `good_tbl` where content_idx = ?",  [$parm[1]]);
        $chk =  false;
        $meGood = false;
        if(ss()){
            $chk = $_SESSION['user']->idx == $item->user_idx;
            $checkMe = fetch("SELECT * FROM `good_tbl` where user_idx = ? and content_idx = ?", [$_SESSION['user']->idx, $parm[1]]);
            $meGood = $checkMe ? true : false;
        }
        view("more", ["item"=>$item, "chk"=>$chk, "comment"=>$comment, "meGood" => $meGood, "allGood" => $allGood->cnt]);
    }

    // 수정 삭제시 본인 인지 다시 확인
    function delete($pram){
        query("delete from `content_tbl` where idx =?", [$parm[1]]);
        go("/", "글이 삭제되었습니다");

    }

    function comment(){
        loginCheck();
        extract($_POST);
        
        query("insert into `comment_tbl`(`user_idx`, `item_idx`, `content`) values(?,?,?)", [$_SESSION['user']->idx, $item_idx, $content]);
        back();
    }
}