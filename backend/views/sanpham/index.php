<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SanPhamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'San Phams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="san-pham-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create San Pham', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SanPhamID',
            'TenSanPham',
            'GiaBan',
            'LoaiSanPham',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SanPham $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SanPhamID' => $model->SanPhamID]);
                 }
            ],
        ],
    ]); ?>


</div>
