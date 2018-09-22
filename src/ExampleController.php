<?php

namespace cyberpaste\extensions\CarRsa;

use CarModel;
use Yii;

class ExampleController extends Controller {

    public function actionGetMarks() {
        $type = Yii::$app->request->post('type_car');
        $marks = CarModel::getMarks($type);
        return $marks;
    }

    public function actionGetModels() {
        $type = Yii::$app->request->post('type_car');
        $mark = Yii::$app->request->post('mark');
        $models = CarModel::getModels($mark, $type);
        return $models;
    }

    public function actionGetModelId() {
        $type = Yii::$app->request->post('type_car');
        $mark = Yii::$app->request->post('mark');
        $model = Yii::$app->request->post('model');
        $id = CarModel::getId($mark, $model, $type);
        return $id;
    }

}
