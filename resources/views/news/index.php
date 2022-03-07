<?php foreach ($newsList as $news): ?>
    <h3>
        <a href="<?=route('news.show', ['id'=>$news['id']])?>">
            <?=$news['title']?>
        </a>
    </h3>
    <div class="news">
        <img src="<?=$news['image']?>" alt="<?=$news['title']?>">
        <br>
        <div class="box">
            <p>Категория: <em><?=$news['category']?></em></p>
            <p>Статус: <em><?=$news['status']?></em></p>
            <p>Автор: <em><?=$news['author']?></em></p>
            <p><?=$news['description']?></p>
        </div>

    </div>
    <hr>
<!--TODO 1:32:02-->
<?php endforeach; ?>

<style>
    .news{
        display: flex;
    }
    .box{
        margin-left: 12px;
    }
</style>

