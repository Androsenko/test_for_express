<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guestbook-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> - обязательные поля для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->hiddenField($model,'ip',array('value'=>$_SERVER['REMOTE_ADDR'])); ?>
	<?php echo $form->hiddenField($model,'ua',array('value'=>$_SERVER['HTTP_USER_AGENT'])); ?>
	<?php echo $form->hiddenField($model,'cdt',array('value'=>date("Y-m-d H:i:s"))); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homepage'); ?>
		<?php echo $form->textField($model,'homepage',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'homepage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->