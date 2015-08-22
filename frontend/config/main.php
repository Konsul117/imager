<?php

$params = array_merge(
		require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
	'id'					 => 'frontend',
	'basePath'				 => dirname(__DIR__),
	'bootstrap'				 => ['log'],
	'controllerNamespace'	 => 'frontend\controllers',
	'components'			 => [
		'user'			 => [
			'identityClass'		 => 'common\models\User',
			'enableAutoLogin'	 => true,
		],
		'log'			 => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'	 => [
				[
					'class'	 => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'urlManager'	 => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
//			'enableStrictParsing' => true,

			'rules' => [
					[
						'pattern'	 => 'image',
						'route'		 => 'image/image',
						'suffix'	 => '/',
					],
			],
		],
		'errorHandler'	 => [
			'errorAction' => 'site/error',
		],
		'view' => [
			'class' => \common\base\FrontendView::className(),
			'theme' => [
				'pathMap' => [
					'@app/views'			=> '@theme',
					'@app/modules'			=> '@theme/modules',
					'@app/widgets'			=> '@theme/widgets',
					'@app/widgets/blocks'	=> '@theme/modules/blocks',
				],
			],
		],
	],
	'modules'				 => [
		'image' => [
			'class' => \common\modules\image\Image::className(),
		],
	],
	'params'				 => $params,
];
