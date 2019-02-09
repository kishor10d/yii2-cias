<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
$perma = Yii::$app->params;
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-<?=Yii::$app->params["icon"]?>"> </i> <?=Yii::$app->params["skipTitle"]?> <small><?=Yii::$app->params["small"]?></small></h1>
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>CodeInsect</b> Admin System | Version 1.0
    </div>
    <strong>Copyright &copy; 2018-19 <a href="<?= Yii::$app->homeUrl ?>">CodeInsect</a>.</strong> All rights reserved.
</footer>