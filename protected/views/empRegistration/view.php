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
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	'emp_image',
			'emp_username'
	),
)); ?>

<img alt="" width="100px" height="100px" src="<?php echo Yii::app()->request->baseUrl.Constants::$IMAGES_PATH.CHtml::encode($model->emp_image); ?>" />