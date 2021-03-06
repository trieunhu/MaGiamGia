<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\posts\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tất cả danh mục';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tạo mới', ['create','type'=>$type], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [ 'class' => 'yii\grid\CheckboxColumn',],

            'id',
             [
                'attribute'=>'parent_id',
                'value' => function($data) {
                    return $data->parent == NULL ? "Cha": $data->parent->title;
                }
            ],
            'title',
            'description:ntext',
            [
                'attribute'=>'slug',
                'value' => function($data) {
                    return $data->getSlug();
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
            
            ],
        ],
    ]); ?>

</div>
