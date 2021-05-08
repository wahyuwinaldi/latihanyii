<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Hewan */
?>
<div class="hewan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_hewan',
        ],
    ]) ?>

</div>
