<?php
/* @var $this EmpHelppageController */
/* @var $model EmpHelppage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emp-helppage-form',
	'enableAjaxValidation'=>false,)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<input size="30" maxlength="30" name="tags" id="EmpDocument_help_tags" type="text" />
		<?php echo $form->error($model,'tags'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'content_uploadedby'); ?>
		<?php echo $form->textField($model,'content_uploadedby',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'content_uploadedby'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->