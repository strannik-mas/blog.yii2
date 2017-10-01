<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

/**
 * класс для таблицы одноименной
 */
class Reviews extends ActiveRecord
{
	public function afterFind() {
		//пример строки		{youtube:asdfsdf,480,295}
		$this->video = $this->youtube("{youtube:".$this->video.",480,295}");
	}
	
	private function youtube($text){
		$reg = "/{youtube:([\w-_]*)?,(\d*)?,(\d*)?}/i";
		$text = preg_replace($reg, str_replace(array("%name%", "%width%", "%height%"), array("\\1", "\\2", "\\3"), file_get_contents(Yii::$app->basePath.Yii::$app->params["dir_tmpl"]."youtube.tpl")), $text);
		return $text;
	}
}
?>