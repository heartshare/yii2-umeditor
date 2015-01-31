<?php
/**
 * @copyright Copyright (c) 2015 Shiyang! Consulting Group LLC
 * @link http://shiyang.me
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
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