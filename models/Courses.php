<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * класс для таблицы одноименной
 */
class Courses extends ActiveRecord
{
    public $img;
	public $order;
	public $link;
	
	
	//метод вызывается после того, как произошла выборка из базы
	public function afterFind(){
		//ссылка на Подробнее
		$this->link = "http://srs.myrusakov.ru/".$this->alias;
		
		$this->img = "/web/images/courses/".$this->alias.".png";
		//https://blog.myrusakov.ru/courses.html - ссылки от кнопки Заказать
		$this->order = "http://srs.myrusakov.ru/order?product_ids=".$this->srs_id;
	}
}
?>