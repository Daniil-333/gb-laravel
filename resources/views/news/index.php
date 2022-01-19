<?php foreach ($newslist as $news): ?>
    <div>
        <h2><a href="<?=route('news.show', ['id' => $news['id']])?>"><?=$news['title']?></a></h2>
        <p><?=$news['author']?> &nbsp; Дата добавления: <?=$news['created_at']?></p>
        <p><?=$news['description']?></p>
    </div><hr>
<?php endforeach;?>
