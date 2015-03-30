<?php
/* @var $this EmpHelppageTagsController */
/* @var $model EmpHelppageTags */

$this->breadcrumbs=array(
	'Emp Helppage Tags'=>array('index'),
	$model->tag_id=>array('view','id'=>$model->tag_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpHelppageTags', 'url'=>array('index')),
	array('label'=>'Create EmpHelppageTags', 'url'=>array('create')),
	array('label'=>'View EmpHelppageTags', 'url'=>array('view', 'id'=>$model->tag_id)),
	array('label'=>'Manage EmpHelppageTags', 'url'=>array('admin')),
);
?>

<h1>Update EmpHelppageTags <?php echo $model->tag_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>