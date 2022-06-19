    <p><?=$item->title?></p>
    <p><?=$item->content?></p>

    <!-- 본일 글일때 수정 삭제 -->
    <?php if($chk):?>
        <div>삭제</div>
        <div>수정</div>
    <?php else:?>

    <?php endif;?>

    <form action="/item/comment" method="post">
        <input type="hidden" value="<?=$item->idx?>" name="item_idx">
        <input type="text" name="content">
        <button type="submit">작성</button>
    </form>
    <?php foreach($comment as $c_item) :?>
        <div>
            <img href="/upload/<?=$c_item->content?>"></img>
            <div><?=$c_item->name?></div>
        </div>
        <div><?=$c_item->content?></div>

    <?php endforeach;?>