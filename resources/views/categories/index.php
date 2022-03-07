<h1 class="title">Страница категорий новостей</h1>

    <div class="wrap flex cards">
        <?php foreach ($categoriesList as $category):?>
            <a href="<?=route('categories.show', ['cat'=>$category])?>">
                <div class="card">
                    <div class="card__text">
                        <?=ucfirst($category)?>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<style>
    /*https://material.io/resources/color/#!/?view.left=1&view.right=0&primary.color=9FA8DA&secondary.color=1976D2*/

    .flex{
        display: flex;
        flex-wrap: wrap;
    }
    .title{
        width: 100%;
        padding:20px 0;
        text-align: center;
        background-color: #9fa8da;
        color: #000000;
    }

    .wrap{
        max-width: 1170px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 16px;
        padding-right: 16px;

    }
    .cards{
        justify-content: space-around;
    }
/*    описываю карточку*/
    .card{
        display: flex;

        min-height: 120px;
        min-width: 200px;
        align-items: center;
        justify-content: center;

        border: #9fa8da 1px solid;
        margin-top: 20px;
    }

    .card__text{
        color: #2d3748;
        font-size: 30px;
    }
</style>
