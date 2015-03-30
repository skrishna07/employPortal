<?php
/* @var $this EmpHelppageTagsController */
/* @var $model EmpHelppageTags */

$this->breadcrumbs=array(
	'Emp Helppage Tags'=>array('index'),
	$model->tag_id,
);

$this->menu=array(
	array('label'=>'List EmpHelppageTags', 'url'=>array('index')),
	array('label'=>'Create EmpHelppageTags', 'url'=>array('create')),
	array('label'=>'Update EmpHelppageTags', 'url'=>array('update', 'id'=>$model->tag_id)),
	array('label'=>'Delete EmpHelppageTags', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tag_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpHelppageTags', 'url'=>array('admin')),
);
?>

<h1>View EmpHelppageTags #<?php echo $model->tag_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tag_id',
		'page_id',
		'tags',
	),
)); ?>
