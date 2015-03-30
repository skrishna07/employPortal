<?php
/* @var $this EmpDocTagsController */
/* @var $model EmpDocTags */

$this->breadcrumbs=array(
	'Emp Doc Tags'=>array('index'),
	$model->tag_id=>array('view','id'=>$model->tag_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpDocTags', 'url'=>array('index')),
	array('label'=>'Create EmpDocTags', 'url'=>array('create')),
	array('label'=>'View EmpDocTags', 'url'=>array('view', 'id'=>$model->tag_id)),
	array('label'=>'Manage EmpDocTags', 'url'=>array('admin')),
);
?>

<h1>Update EmpDocTags <?php echo $model->tag_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>