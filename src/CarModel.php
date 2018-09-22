<?php

namespace cyberpaste\extensions\CarRsa;

use yii\db\ActiveRecord;

class CarModel extends ActiveRecord {

    public static function tableName() {
        return '{{dictionary_rsa}}';
    }

    /**
     * Get Marks
     * @return array
     */
    public static function getMarks($type) {
        if (self::convertCarType($type)) {
            $marks = self::find()->select('mark')
                    ->where(['active' => 1, 'type_car' => $type])
                    ->distinct()
                    ->orderBy(['(mark)' => SORT_ASC])
                    ->all();

            return $marks;
        }
        return [];
    }

    /**
     * Get mark models
     * @param string $mark
     * @return array
     */
    public static function getModels($mark, $type) {
        if (self::convertCarType($type)) {
            $marks = self::find()->select('model')
                    ->where(['mark' => $mark, 'active' => 1, 'type_car' => $type])
                    ->distinct()
                    ->orderBy(['(model)' => SORT_ASC])
                    ->all();

            return $marks;
        }
        return [];
    }

    /**
     * Get Rsa Id
     * @param string $mark
     * @param string $model
     * @param string $type
     * @return array
     */
    public static function getId($mark, $model, $type) {
        $marks = self::find()->select('id')
                ->where(['mark' => $mark, 'model' => $model, 'active' => 1, 'type_car' => $type])
                ->one();

        if (isset($marks['id'])) {
            return ['item' => $marks['id']];
        }
        return false;
    }

    /**
     * Check mark and model
     * @param string $mark
     * @param string $model
     * @return bool
     */
    public static function checkMarkAndModel($mark, $model) {
        $condition = self::find()->select('model')
                ->where(['mark' => $mark, 'model' => $model, 'active' => 1])
                ->one();
        if ($mark && $model && $condition) {
            return true;
        }
        return false;
    }

}
