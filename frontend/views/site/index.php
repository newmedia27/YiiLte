<?php

/* @var $this yii\web\View */

$this->title = 'All Public';
?>
<div class="site-index">

    <div class="container">
        <div class="row">

            <?php foreach ($posts as $post):?>

            <h2><?= $post->category->name?></h2>

            <p><?= $post->name?></p>

                <a href="<?= \yii\helpers\Url::to(['site/view','id'=>$post->id])?>"><?= $post->name  ?></a>
                <br>


        <?php endforeach; ?>
        </div>
    </div>

</div>
