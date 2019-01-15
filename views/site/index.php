<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 <h1>删除书籍</h1>
 <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

<div class="alert alert-success">
    删除成功
</div>

<p>
    谢谢使用该系统！
</p>
<?php elseif (Yii::$app->session->hasFlash('notDelete')): ?>
<div class="alert alert-success">
    删除失败，请确认书名！
</div>

<p>
    谢谢使用该系统！
</p>
<?php else: ?>
<?php $form=ActiveForm::begin();?>
<?= $form->field($delbook,'name')->textInput(); //用户名输入框 ?>
 
	<div class='form-group'>
		<?=Html::submitButton('删除',['class'=>'btn btn-primary  btn-block']) ?>
	</div>
 
<?php ActiveForm::end();?>

<?php endif; ?>
