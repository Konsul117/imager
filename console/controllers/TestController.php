<?php

namespace console\controllers;

use \yii\console\Controller;

/**
 * Description of TestController
 *
 * @author konsul
 */
class TestController extends Controller {
	
	public function actionIndex() {
        $Image = new \common\components\Image\ImageObject();
		
		var_dump($Image);
    }
	
}
