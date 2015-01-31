yii2-umeditor
=============
UMeditor, referred to as UM, is a simple version ueditor. To meet our portal is simple to post reply box frame and demands for customized online rich text editor.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shiyang/yii2-umeditor "*"
```

or add

```
"shiyang/yii2-umeditor": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php use shiyang\umeditor\Umeditor; ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'content')->widget(Umeditor::className(), [
    'options' => [
        'style' => 'width:800px'
    ]
]) ?>

<div class="form-group">
    <?= Html::submitButton('Create', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
```

Further Information
-------------------
Please, check the [Umeditor plugin site](http://ueditor.baidu.com) documentation for further information about its configuration options.