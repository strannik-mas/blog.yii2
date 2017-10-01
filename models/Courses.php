<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ����� ��� ������� �����������
 */
class Courses extends ActiveRecord
{
    public $img;
	public $order;
	public $link;
	
	
	//����� ���������� ����� ����, ��� ��������� ������� �� ����
	public function afterFind(){
		//������ �� ���������
		$this->link = "http://srs.myrusakov.ru/".$this->alias;
		
		$this->img = "/web/images/courses/".$this->alias.".png";
		//https://blog.myrusakov.ru/courses.html - ������ �� ������ ��������
		$this->order = "http://srs.myrusakov.ru/order?product_ids=".$this->srs_id;
	}
}
?>