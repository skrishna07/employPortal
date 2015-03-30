<?php
/* @var $this EmpDocumentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emp Documents',
);

$this->menu=array(
	array('label'=>'Create EmpDocument', 'url'=>array('create')),
	array('label'=>'Manage EmpDocument', 'url'=>array('admin')),
);
?>

<h1>Emp Documents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
