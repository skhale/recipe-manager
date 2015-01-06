<?php
namespace app\models;

class AddRecipeForm extends \yii\base\Model
{
	public $id;
	public $name;
	public $description;
	public $base;
	public $course;
	public $ethnicity;
	public $difficulty;
	public $preperationTime;
	public $servingSize;
	public $directions;

	public function rules() {
		return [
			[['name', 'description', 'directions'], 'required'],
			[['id', 'base', 'course', 'ethnicity', 'difficulty', 'preperationTime', 'servingSize'], 'integer']
		];
	}
}