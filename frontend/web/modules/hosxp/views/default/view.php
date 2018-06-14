<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model modules\hosxp\models\Hosxp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hosxps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosxp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
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
            'age_y',
            'pttype',
            'pttype_name',
            'adjrw',
            'uc_money',
            'paid_money',
            'item_money',
        ],
    ]) ?>

</div>
