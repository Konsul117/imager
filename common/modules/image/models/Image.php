<?php

namespace common\modules\image\models;

use yii\db\ActiveRecord;

class Image extends ActiveRecord implements ImageInterface {
	
	public static function tableName() {
		parent::tableName();
	}
	
}
