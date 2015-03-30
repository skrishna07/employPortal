<?php
/* @var $this EmpDocumentController */
/* @var $model EmpDocument */

$this->breadcrumbs=array(
	'Emp Documents'=>array('index'),
	$model->doc_id=>array('view','id'=>$model->doc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpDocument', 'url'=>array('index')),
	array('label'=>'Create EmpDocument', 'url'=>array('create')),
	array('label'=>'View EmpDocument', 'url'=>array('view', 'id'=>$model->doc_id)),
	array('label'=>'Manage EmpDocument', 'url'=>array('admin')),
);
?>

<h1>Update EmpDocument <?php echo $model->doc_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>