

<?php  if(Yii::app()->user->isGuest){?>
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>
<div class="form-full-width">
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>
<div class="roe buttons"> 
        <?php echo CHtml::link('forgetpassword',array('Empregistration/forget')); ?><br>
        <?php echo CHtml::link('Are you new  user Sign Up here',array('empRegistration/create')); ?>
    </div>
    
<?php $this->endWidget(); ?>
</div><!-- form -->
</div>
<?php }
else 
{
	$this->pageTitle=Yii::app()->name;
?>
<h1>Welcome to  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p> Select the required option from menu</p>
<?php 
}?>	

