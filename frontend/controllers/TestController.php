<?php

namespace frontend\controllers;

use app\models\QueueStatuses;
use Yii;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new QueueStatuses();

        if (!Yii::$app->request->isPost) {
            return $this->render('index', [
                'model' => $model
            ]);
        }

        $model->load(Yii::$app->request->post());

        $queueExists = QueueStatuses::find()->where(['s_name' => $model->s_name, 'c_name' => $model->c_name])->one();

        if ($queueExists) {
            \Yii::$app->getSession()->setFlash('error', 'This queue status already exists');
            return $this->refresh();
        }

        if (!$model->validate()) {
            \Yii::$app->getSession()->setFlash('error', $model->getErrors());
            return $this->refresh();
        }

        if (!$model->save()) {
            \Yii::$app->getSession()->setFlash('error', $model->getErrors());
            return $this->refresh();
        }

        \Yii::$app->getSession()->setFlash('success', 'Data saved successfully');

        return $this->render('index', [
             'model' => $model
        ]);
    }
}
