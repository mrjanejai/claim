<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel modules\hosxp\models\HosxpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'จัดการข้อมูล hosxp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosxp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <div class="row container">
        <div class="col-sm-2">
        <?= Html::a('Create Hosxp', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="col-sm-4">  
        <?php $form = ActiveForm::begin([
        'action' => ['sync-hosxp'],
        'method' => 'get',
        ]); ?>
        <?php 
        echo DatePicker::widget([
            'name' => 'd1',
            'value' => '',
            'type' => DatePicker::TYPE_RANGE,
            'name2' => 'd2',
            'value2' => '',
            'options' => ['placeholder' => 'Select date ...'],'language'=>'th',
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
        ]);?>
            </div>
   
        <div class="col-sm-2">
       
        <?= Html::submitButton('Sync Hosxp', ['class' => 'btn btn-danger']) ?>
        <?php ActiveForm::end(); ?>
            </div>
        </div>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'an',
            'vn',
            'hn',
            'fullname',
            'cid',
            'pdx',
            'dx0',
            'dx1',
            'dx2',
            'dx3',
            'dx4',
            'dx5',
            'sex',
            'bday',
//            'pttype',
//            'pttype_name',
//            'adjrw',
//            'uc_money',
//            'paid_money',
//            'item_money',
//            'age_y',
//            'pttype',
//            'pttype_name',
//            'adjrw',
//            'uc_money',
//            'paid_money',
//            'item_money',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
