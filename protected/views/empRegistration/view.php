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
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
<?php 
$path = Yii::app()->basePath.'/img/'.CHtml::encode($model->emp_image);
$yourImageUrl = Yii::app()->assetManager->publish($path);
$path1 = Yii::app()->basePath.'/img/'.CHtml::encode($model->emp_identityproof);
$yourImageUrl1 = Yii::app()->assetManager->publish($path);

?>

<h1>View EmpRegistration #<?php echo $model->emp_id; ?></h1>
<div class="view">

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->emp_id), array('view', 'id'=>$model->emp_id)); ?>
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
	<img alt="" width="100px" height="100px" src="<?php echo $yourImageUrl ?>" />
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('emp_identityproof')); ?>:</b>
	<img alt="" width="100px" height="100px" src="<?php echo $yourImageUrl1 ?>" />
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
