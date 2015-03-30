<?php
/* @var $this EmpHelppageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emp Helppages',
);

$this->menu=array(
	array('label'=>'Create EmpHelppage', 'url'=>array('create')),
	array('label'=>'Manage EmpHelppage', 'url'=>array('admin')),
);
?>

<h1>Emp Helppages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
