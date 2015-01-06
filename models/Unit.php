<?php
namespace app\models;

class Unit extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%units}}';
	}
}