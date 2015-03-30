<?php
/* @var $this EmpHelppageTagsController */
/* @var $model EmpHelppageTags */

$this->breadcrumbs=array(
	'Emp Helppage Tags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpHelppageTags', 'url'=>array('index')),
	array('label'=>'Manage EmpHelppageTags', 'url'=>array('admin')),
);
?>

<h1>Create EmpHelppageTags</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>