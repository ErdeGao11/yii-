<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form=ActiveForm::begin();?>
<?= $form->field($model,'name')->textInput(); //用户名输入框 ?>
<?= $form->field($model,'type')->textInput(); //用户名输入框 ?>
<?= $form->field($model,'author')->textInput(); //用户名输入框 ?>
 
	<div class='form-group'>
		<?=Html::submitButton('添加',['class'=>'btn btn-primary  btn-block']) ?>
	</div>
 
<?php ActiveForm::end();?>
