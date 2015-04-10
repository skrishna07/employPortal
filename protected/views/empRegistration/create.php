<?php
/* @var $this EmpRegistrationController */
/* @var $model EmpRegistration */
 if(Yii::app()->user->isGuest){}else {
$this->breadcrumbs=array(
	'Emp Registrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpRegistration', 'url'=>array('index')),
	array('label'=>'Manage EmpRegistration', 'url'=>array('admin')),
);
 }
?>

<h1>Registration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>