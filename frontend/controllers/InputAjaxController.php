<?php

namespace frontend\controllers;

use common\models\Hewan;
use Yii;

class InputAjaxController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSave()
    {
        $request = Yii::$app->request;
        $post = $request->post();
        $model = new Hewan();
        $model->nama_hewan = $post['namaHewan'];
        $model->save();
        return json_encode('success');
    }
}
