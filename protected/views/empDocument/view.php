<?php
/* @var $this EmpDocumentController */
/* @var $model EmpDocument */

$this->breadcrumbs=array(
	'Emp Documents'=>array('index'),
	$model->doc_id,
);

$this->menu=array(
	array('label'=>'List EmpDocument', 'url'=>array('index')),
	array('label'=>'Create EmpDocument', 'url'=>array('create')),
	array('label'=>'Update EmpDocument', 'url'=>array('update', 'id'=>$model->doc_id)),
	array('label'=>'Delete EmpDocument', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->doc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpDocument', 'url'=>array('admin')),
);
?>

<h1>View EmpDocument #<?php echo $model->doc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'doc_id',
		'document',
		'doc_uploadedby',
		'createdate',
		'updatedate',
	),
)); ?>
