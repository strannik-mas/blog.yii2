<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * класс для таблицы одноименной
 */
class Minicourses extends ActiveRecord
{
    public function afterFind(){
		$this->img = "/web/images/minicourses/".$this->img;
	}
}
?>