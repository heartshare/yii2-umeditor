<?php
/**
 * @copyright Copyright (c) 2015 Shiyang
 * @link http://shiyang.me
 */
namespace shiyang\umeditor;

use yii\web\AssetBundle;

class UmeditorAsset extends AssetBundle
{
	public $sourcePath = '@vendor/shiyang/yii2-umeditor/umeditor';

	public $css = [
		'themes/default/css/umeditor.min.css',
	];

	public $js = [
		'umeditor.min.js',
		'umeditor.config.js',
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];
} 