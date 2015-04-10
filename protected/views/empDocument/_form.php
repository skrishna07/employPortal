<?php
/* @var $this EmpDocumentController */
/* @var $model EmpDocument */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'emp-document-form',
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'document'); ?>
		<?php echo $form->fileField($model, 'document');?>
		<?php echo $form->error($model,'document'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('value'=>$tagsList));?>
		<?php echo $form->error($model,'tags'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'doc_uploadedby'); ?>
		<?php echo $form->textField($model,'doc_uploadedby',array('size'=>30,'maxlength'=>30,'placeholder'=>Yii::app()->user->name ,'readonly'=>true,'value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'doc_uploadedby'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
