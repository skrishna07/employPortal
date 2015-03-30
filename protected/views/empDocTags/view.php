<?php
/* @var $this EmpDocTagsController */
/* @var $model EmpDocTags */

$this->breadcrumbs=array(
	'Emp Doc Tags'=>array('index'),
	$model->tag_id,
);

$this->menu=array(
	array('label'=>'List EmpDocTags', 'url'=>array('index')),
	array('label'=>'Create EmpDocTags', 'url'=>array('create')),
	array('label'=>'Update EmpDocTags', 'url'=>array('update', 'id'=>$model->tag_id)),
	array('label'=>'Delete EmpDocTags', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tag_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpDocTags', 'url'=>array('admin')),
);
?>

<h1>View EmpDocTags #<?php echo $model->tag_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tag_id',
		'doc_id',
		'tags',
	),
)); ?>
