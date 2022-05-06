<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SanPham */

$this->title = $model->SanPhamID;
$this->params['breadcrumbs'][] = ['label' => 'San Phams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="san-pham-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'SanPhamID' => $model->SanPhamID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'SanPhamID' => $model->SanPhamID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SanPhamID',
            'TenSanPham',
            'GiaBan',
            'LoaiSanPham',
        ],
    ]) ?>

</div>
