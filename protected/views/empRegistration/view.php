<?php
/* @var $this EmpRegistrationController */
/* @var $model EmpRegistration */

$this->breadcrumbs=array(
	'Emp Registrations'=>array('index'),
	$model->emp_id,
);

$this->menu=array(
	array('label'=>'List EmpRegistration', 'url'=>array('index')),
	array('label'=>'Create EmpRegistration', 'url'=>array('create')),
	array('label'=>'Update EmpRegistration', 'url'=>array('update', 'id'=>$model->emp_id)),
	array('label'=>'Delete EmpRegistration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->emp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpRegistration', 'url'=>array('admin')),
);
?>

<h1>View EmpRegistration #<?php echo $model->emp_id; ?></h1>
<div class="view">
<?php echo CHtml::link("download", array('download', 'id'=>$model->emp_id)); ?>
	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->emp_id), array('view', 'id'=>$model->emp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_username')); ?>:</b>
	<?php echo CHtml::encode($model->emp_username); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_password')); ?>:</b>
	<?php echo CHtml::encode($model->emp_password); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_firstname')); ?>:</b>
	<?php echo CHtml::encode($model->emp_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_lastname')); ?>:</b>
	<?php echo CHtml::encode($model->emp_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_email')); ?>:</b>
	<?php echo CHtml::encode($model->emp_email); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_mobno')); ?>:</b>
	<?php echo CHtml::encode($model->emp_mobno); ?>
	<br />

	
	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_gender')); ?>:</b>
	<?php echo CHtml::encode($model->emp_gender); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_father_hus_name')); ?>:</b>
	<?php echo CHtml::encode($model->emp_father_hus_name); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_dob')); ?>:</b>
	<?php echo CHtml::encode($model->emp_dob); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_image')); ?>:</b>
	<img alt="" width="100px" height="100px" src="<?php echo Yii::app()->request->baseUrl.Constants::$IMAGES_PATH.CHtml::encode($model->emp_image); ?>" />
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_identityproof')); ?>:</b>
	<img alt="" width="100px" height="100px" src="<?php echo Yii::app()->request->baseUrl.Constants::$IMAGES_PATH.CHtml::encode($model->emp_identityproof); ?>" />
		<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_presentaddress')); ?>:</b>
	<?php echo CHtml::encode($model->emp_presentaddress); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_permenentaddress')); ?>:</b>
	<?php echo CHtml::encode($model->emp_permenentaddress); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_pancard')); ?>:</b>
	<?php echo CHtml::encode($model->emp_pancard); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_passport')); ?>:</b>
	<?php echo CHtml::encode($model->emp_passport); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_role')); ?>:</b>
	<?php echo CHtml::encode($model->emp_role); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('createdate')); ?>:</b>
	<?php echo CHtml::encode($model->createdate); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($model->updatedate); ?>
	<br />



</div>
