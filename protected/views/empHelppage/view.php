<?php
/* @var $this EmpHelppageController */
/* @var $model EmpHelppage */

$this->breadcrumbs=array(
	'Emp Helppages'=>array('index'),
	$model->page_id,
);

$this->menu=array(
	array('label'=>'List EmpHelppage', 'url'=>array('index')),
	array('label'=>'Create EmpHelppage', 'url'=>array('create')),
	array('label'=>'Update EmpHelppage', 'url'=>array('update', 'id'=>$model->page_id)),
	array('label'=>'Manage EmpHelppage', 'url'=>array('admin')),
);
?>

<h1>View EmpHelppage #<?php echo $model->page_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'page_id',
		'content',
		'content_uploadedby',
		'createdate',
		'updateddate',
	),
)); ?>
