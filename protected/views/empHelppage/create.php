<?php
/* @var $this EmpHelppageController */
/* @var $model EmpHelppage */

$this->breadcrumbs=array(
	'Emp Helppages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpHelppage', 'url'=>array('index')),
	array('label'=>'Manage EmpHelppage', 'url'=>array('admin')),
);
?>

<h1>Create EmpHelppage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>