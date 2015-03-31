<?php
/* @var $this EmpRegistrationController */
/* @var $model EmpRegistration */
/* @var $form CActiveForm */
?>
<html>
<head>


</head>
</html>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emp-registration-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	


	<div class="row">
		<?php echo $form->labelEx($model,'emp_firstname'); ?>
<input size="30" maxlength="30" name="EmpRegistration[emp_firstname]" id="EmpRegistration_emp_firstname" type="text" />			
				<?php echo $form->error($model,'emp_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_lastname'); ?>
<input size="30" maxlength="30" name="EmpRegistration[emp_lastname]" id="EmpRegistration_emp_lastname" type="text" />			
<?php echo $form->error($model,'emp_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'emp_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_mobno'); ?>
		<?php echo $form->textField($model,'emp_mobno',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'emp_mobno'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->labelEx($model,'emp_gender'); ?>
		<?php 
		echo $form->dropDownList($model,
                        'emp_gender',
                        array('M'=>'M','F'=>'F'),
                        array('empty'=>'Select Option'));
		?>
		<?php echo $form->error($model,'emp_gender'); ?>
		<?php echo $form->error($model,'emp_gender'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'emp_father_hus_name'); ?>
		<?php echo $form->textField($model,'emp_father_hus_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'emp_father_hus_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_dob'); ?>
		<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'attribute' => 'emp_dob',
    'htmlOptions' => array(
        'size' => '10',         // textField size
        'maxlength' => '10',    // textField maxlength
    ),
));
?>
		<?php echo $form->error($model,'emp_dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_image'); ?>
	<?php echo CHtml::activeFileField($model, 'emp_image'); ?> 
		<?php echo $form->error($model,'emp_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_identityproof'); ?>
		<?php echo CHtml::activeFileField($model, 'emp_identityproof'); ?> 
		<?php echo $form->error($model,'emp_identityproof'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_presentaddress'); ?>
		<?php echo $form->textArea($model,'emp_presentaddress',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'emp_presentaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_permenentaddress'); ?>
		<?php echo $form->textArea($model,'emp_permenentaddress',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'emp_permenentaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_pancard'); ?>
		<?php echo $form->textArea($model,'emp_pancard',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'emp_pancard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_passport'); ?>
		<?php echo $form->textArea($model,'emp_passport',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'emp_passport'); ?>
	</div>

	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->