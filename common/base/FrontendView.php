<?php

namespace common\base;

use yii\web\View;

class FrontendView extends View {
	/**
	 * @inheritdoc
	 *
	 * @author zalatov.a
	 */
	protected function findViewFile($view, $context = null) {
		$path = parent::findViewFile($view, $context);
		$path = str_replace(['\\', '/'], '/', $path);

		if (1 === preg_match('/^(.*)\/[^\/]+\/modules\/([^\/]+)\/views\/(.*)$/', $path, $matches)) {
			$path = '@app/modules/' . $matches[2] . '/' . $matches[3];
		}
		elseif (1 === preg_match('/^(.*)\/[^\/]+\/modules\/([^\/]+)\/widgets\/views\/(.*)$/', $path, $matches)) {
			$path = ('@app/modules/' . $matches[2] . '/widgets/' . $matches[3]);
		}

		return $path;
	}
}