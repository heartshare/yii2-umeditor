<?php
/**
 * @copyright Copyright (c) 2015 Shiyang! Consulting Group LLC
 * @link http://shiyang.me
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace umeditor\umeditor;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Umeditor renders a editor js plugin for classic editing.
 * @see http://ueditor.baidu.com/
 * @author Baidu FLX
 * @link https://github.com/fex-team/umeditor
 */
class Umeditor extends InputWidget
{
	/**
	 * Editor options that will be passed to the editor
	 */
	public $clientOptions = [];

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		if ($this->hasModel()) {
			echo Html::activeTextarea($this->model, $this->attribute, $this->options);
		} else {
			echo Html::textarea($this->name, $this->value, $this->options);
		}
		$this->registerPlugin();
	}

	/**
	 * Registers Umeditor plugin
	 */
	protected function registerPlugin()
	{
		$view = $this->getView();

		UmeditorAsset::register($view);

		$id = $this->options['id'];

		$options = $this->clientOptions !== false && !empty($this->clientOptions)
			? Json::encode($this->clientOptions)
			: '{}';
		$js = "$(function(){ window.um = UM.getEditor('$id'); });";
		$view->registerJs($js);
	}
} 