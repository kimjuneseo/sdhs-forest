<?php foreach($content as $item) :?>
    <a href="/item/more/<?=$item->idx?>">
        <p><?=$item->title?></p>
        <p><?=$item->content?></p>
    </a>
<?php endforeach;?>