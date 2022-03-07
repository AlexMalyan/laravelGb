
<h3> <?=$news['title']?></h3>
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
<style>
    .news{
        display: flex;
    }
    .box{
        margin-left: 12px;
    }
</style>

