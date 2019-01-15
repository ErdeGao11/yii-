<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '添加书籍';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            添加成功
        </div>

        <p>
            谢谢使用该系统！
        </p>

    <?php else: ?>

        <p>
            请输入书名，类别，作者
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>
                
                <?= $form->field($model, 'name') ?>

                <?= $form->field($model, 'type') ?>

                <?= $form->field($model, 'author') ?>
                
                    <div class="form-group">
                        <?= Html::submitButton('添加', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
