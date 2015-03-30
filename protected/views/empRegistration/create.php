<?php
/* @var $this EmpRegistrationController */
/* @var $model EmpRegistration */

$this->breadcrumbs=array(
	'Emp Registrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpRegistration', 'url'=>array('index')),
	array('label'=>'Manage EmpRegistration', 'url'=>array('admin')),
);
?>

<h1>Create EmpRegistration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>