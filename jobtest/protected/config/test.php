<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			'db'=>array(
				'connectionString' => 'mysql:host=db;dbname=yii1_database',
				'username' => 'root',
				'password' => 'root_password',
				'charset' => 'utf8',
			),
			
		),
	)
);