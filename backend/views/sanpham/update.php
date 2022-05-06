<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SanPham */

$this->title = 'Update San Pham: ' . $model->SanPhamID;
$this->params['breadcrumbs'][] = ['label' => 'San Phams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SanPhamID, 'url' => ['view', 'SanPhamID' => $model->SanPhamID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="san-pham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
