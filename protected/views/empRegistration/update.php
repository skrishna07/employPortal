<?php
/* @var $this EmpRegistrationController */
/* @var $model EmpRegistration */

$this->breadcrumbs=array(
	'Emp Registrations'=>array('index'),
	$model->emp_id=>array('view','id'=>$model->emp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpRegistration', 'url'=>array('index')),
	array('label'=>'Create EmpRegistration', 'url'=>array('create')),
	array('label'=>'View EmpRegistration', 'url'=>array('view', 'id'=>$model->emp_id)),
	array('label'=>'Manage EmpRegistration', 'url'=>array('admin')),
);
?>

<h1>Update EmpRegistration <?php echo $model->emp_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>