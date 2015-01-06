<?php
namespace app\models;

class Ingredient extends \yii\db\ActiveRecord
{
	public static function tableName() {
		return '{{%ingredients}}';
	}

	public function getUnit() {
		return $this->hasOne(\app\models\Unit::className(), ['id' => 'unitId']);
	}
}