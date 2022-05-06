<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SanPham */

$this->title = 'Create San Pham';
$this->params['breadcrumbs'][] = ['label' => 'San Phams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="san-pham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
