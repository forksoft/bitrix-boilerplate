<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/test.ext.bundle.css',
	'js' => 'dist/test.ext.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];