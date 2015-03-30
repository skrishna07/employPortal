<?php
/* @var $this EmpDocTagsController */
/* @var $model EmpDocTags */

$this->breadcrumbs=array(
	'Emp Doc Tags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpDocTags', 'url'=>array('index')),
	array('label'=>'Manage EmpDocTags', 'url'=>array('admin')),
);
?>

<h1>Create EmpDocTags</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>