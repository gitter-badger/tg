<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use \common\models\Control;

/**
 * @var yii\web\View $this
 * @var common\models\Section $model
 */
?>

<?=
DetailView::widget([
    'model' => $model,
    'condensed' => false,
    'hover' => true,
    'mode' => Yii::$app->request->get('edit') == 't' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
    'panel' => [
        'heading' => $this->title,
        'type' => DetailView::TYPE_INFO,
    ],
    'attributes' => [
        'name',
        [
            'attribute' => 'code',
            'format' => 'raw',
            'value' => empty($model->code) ? '' : '<pre class="scroll"><code class="php">' . Html::encode($model->code) . '</code></pre>',
            'type' => DetailView::INPUT_TEXTAREA,
            'options' => [
                'rows' => 15,
                'class' => 'text-monospace'
            ]
        ],
        [
            'attribute' => 'controls',
            'format' => 'raw',
            'type' => DetailView::INPUT_WIDGET,
            'value' => $model->controlsName,
            'widgetOptions' => [
                'class' => DetailView::INPUT_SELECT2,
                'data' => Control::listAll(),
                'options' => [
                    'placeholder' => 'Select Controls ...',
                    'multiple' => true,
                ],
                'pluginOptions' => ['allowClear' => true],
            ],
        ],
    ],
    'deleteOptions' => [
        'url' => ['delete', 'id' => $model->id],
        'data' => [
            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
            'method' => 'post',
        ],
    ],
    'enableEditMode' => true,
])
?>
