<?php
/* @var $this EmpDocumentController */
/* @var $model EmpDocument */

$this->breadcrumbs=array(
	'Emp Documents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpDocument', 'url'=>array('index')),
	array('label'=>'Manage EmpDocument', 'url'=>array('admin')),
);
?>

<h1>Create EmpDocument</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>