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
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	


	<div class="row">
		<?php echo $form->labelEx($model,'emp_firstname'); ?>
			<?php echo $form->textField($model,'emp_firstname',array('size'=>30,'maxlength'=>30,'placeholder'=>'Firstname')); ?>
				<?php echo $form->error($model,'emp_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_lastname'); ?>
			<?php echo $form->textField($model,'emp_lastname',array('size'=>30,'maxlength'=>30,'placeholder'=>'Lastname')); ?>
<?php echo $form->error($model,'emp_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>30,'maxlength'=>30,'placeholder'=>'Email')); ?>
		<?php echo $form->error($model,'emp_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_mobno'); ?>
		<?php echo $form->textField($model,'emp_mobno',array('size'=>30,'maxlength'=>30,'placeholder'=>'Mobile Number')); ?>
		<?php echo $form->error($model,'emp_mobno'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->labelEx($model,'emp_gender'); ?>
		male:<?php echo $form->radioButton($model, 'emp_gender', array(
    'value'=>'M',
    'uncheckValue'=>null
));
 ?>female:<?php 
echo $form->radioButton($model, 'emp_gender', array(
    'value'=>'F',
    'uncheckValue'=>null
)); ?>
		<?php echo $form->error($model,'emp_gender'); ?>
		
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'emp_father_hus_name'); ?>
		<?php echo $form->textField($model,'emp_father_hus_name',array('size'=>30,'maxlength'=>30,'placeholder'=>'Father/Husbend Name')); ?>
		<?php echo $form->error($model,'emp_father_hus_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_dob'); ?>
		<?php
$this->widget('ext.my97DatePicker.JMy97DatePicker',array(
    'name'=>CHtml::activeName($model,'emp_dob'),
    'value'=>$model->emp_dob,
		
    'options'=>array('dateFmt'=>'dd-MM-yyyy',),
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
		<?php echo $form->textArea($model,'emp_presentaddress',array('size'=>30,'maxlength'=>30,'placeholder'=>'Present Address')); ?>
		<?php echo $form->error($model,'emp_presentaddress'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'emp_permenentaddress'); ?>
		<?php echo $form->textArea($model,'emp_permenentaddress',array('size'=>30,'maxlength'=>30,'placeholder'=>'Permenent Address')); ?>
		<?php echo $form->error($model,'emp_permenentaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_pancard'); ?>
		<?php echo $form->textField($model,'emp_pancard',array('rows'=>6, 'cols'=>50,'placeholder'=>'Pancard')); ?>
		<?php echo $form->error($model,'emp_pancard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_passport'); ?>
		<?php echo $form->textField($model,'emp_passport',array('rows'=>6, 'cols'=>50,'placeholder'=>'Passport')); ?>
		<?php echo $form->error($model,'emp_passport'); ?>
	</div>

	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->