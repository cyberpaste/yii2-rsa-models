<?php

namespace cyberpaste\extensions\CarRsa;

use yii\db\Migration;

class m180919_185401_create_rsa_table extends Migration {

    public function up() {
        $this->createTable('dictionary_rsa', [
            'id' => Schema::TYPE_PK,
            'mark' => Schema::TYPE_STRING,
            'model' => Schema::TYPE_STRING,
            'type_license' => Schema::TYPE_STRING,
            'type_code' => Schema::TYPE_STRING,
            'type_manufacturer' => Schema::TYPE_STRING,
            'type_car' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_STRING,
            'mark' => Schema::TYPE_BOOLEAN
        ]);


        $this->execute("
INSERT INTO `dictionary_rsa` (`id`, `mark`, `model`, `type_license`, `type_code`, `type_manufacturer`, `type_car`, `active`) VALUES
(10000, 'ВОСХОД', '', '', '', 'Отечественного производства', '', 1),
(10001, 'ВОСХОД', '3', 'A', '2530', 'Отечественного производства', 'Мотоциклы и мотороллеры', 1),
(10002, 'ВОСХОД', '1', 'A', '2530', 'Отечественного производства', 'Мотоциклы и мотороллеры', 1),
(10003, 'ВОСХОД', '2', 'A', '2530', 'Отечественного производства', 'Мотоциклы и мотороллеры', 1),
(10004, 'ВОСХОД', '2М', 'A', '2530', 'Отечественного производства', 'Мотоциклы и мотороллеры', 1),
(10005, 'ВОСХОД', '3М', 'A', '2530', 'Отечественного производства', 'Мотоциклы и мотороллеры', 1),
(861022201, 'GAC', 'GA1020', 'C', '2532', 'Иностранного производства', 'Грузовые автомобили', 1),
(862000000, 'Sokon', '', '', '', 'Иностранного производства', '', 1),
(862022236, 'Sokon', 'Mini', 'C', '2532', 'Иностранного производства', 'Грузовые автомобили', 1),
(863000000, 'Genesis', '', '', '', 'Иностранного производства', '', 1),
(863022258, 'Genesis', 'G80', 'B', '2531', 'Иностранного производства', 'Легковые автомобили', 1),
(863022259, 'Genesis', 'G90', 'B', '2531', 'Иностранного производства', 'Легковые автомобили', 1),
(864000000, 'Tesla', '', '', '', 'Иностранного производства', '', 1),
(864022271, 'Tesla', 'S', 'B', '2531', 'Иностранного производства', 'Легковые автомобили', 1)
");
    }

    public function down() {
        $this->dropTableIfExists('dictionary_rsa');
    }

}