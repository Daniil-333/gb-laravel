<div>
    <div><a href="#">Категория 1</a></div>
    <div><a href="#">Категория 2</a></div>
    <div><a href="#">Категория 3</a></div>
    <div><a href="#">Категория 4</a></div>
</div><hr>

<?php foreach ($categorieslist as $categories): ?>
    <div>
        <h2><a href="<?=route('news.show', ['id' => $categories['id']])?>"><?=$categories['title']?></a></h2>
        <p>Дата добавления: <?=$categories['created_at']?></p>
    </div><hr>
<?php endforeach;?>

