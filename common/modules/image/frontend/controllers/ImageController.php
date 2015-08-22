<?php

namespace common\modules\image\frontend\controllers;

class ImageController extends \yii\web\Controller {
	
	function actionIndex() {
		return $this->render('index');
	}
	
}
