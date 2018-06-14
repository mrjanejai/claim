<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel modules\hosxp\models\HosxpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hosxps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosxp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hosxp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'an',
            'vn',
            'hn',
            'fullname',
            //'cid',
            //'pdx',
            //'dx0',
            //'dx1',
            //'dx2',
            //'dx3',
            //'dx4',
            //'dx5',
            //'sex',
            //'bday',
            //'age_y',
            //'pttype',
            //'pttype_name',
            //'adjrw',
            //'uc_money',
            //'paid_money',
            //'item_money',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
