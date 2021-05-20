<?php
/**
 * mysql date format is 'Y-m-d H:i:s'
 * iso date format is 'Y n j, g:i a'
 */
return [
	'defaultChannel' => 'console',
	'channels' => [
		'file' => [
			'dateFormat' => "Y-m-d H:i:s",
			'output' => "%datetime% > %level_name% > %message% %context% %extra%\n",
		]
	],
];
