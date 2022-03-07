<h1 class="title"><?=ucfirst($cat);?> category News Page </h1>

<?php foreach ($categoryId as $item): ?>
    <h3>
            <?=$item['title']?>
    </h3>
    <div class="news">
        <img src="<?=$item['image']?>" alt="<?=$item['title']?>">
        <br>
        <div class="box">
            <p>Категория: <em><?=ucfirst($item['category'])?></em></p>
            <p>Статус: <em><?=$item['status']?></em></p>
            <p>Автор: <em><?=$item['author']?></em></p>
            <p><?=$item['description']?></p>
        </div>

    </div>
    <hr>


<?php endforeach; ?>

<style>
    .news{
        display: flex;
    }
    .box{
        margin-left: 12px;
    }
    .no-news{
        text-align: center;
        font-size: 36px;
        color: brown;
    }
</style>
