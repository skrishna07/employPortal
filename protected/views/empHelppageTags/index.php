<?php
/* @var $this EmpHelppageTagsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emp Helppage Tags',
);

$this->menu=array(
	array('label'=>'Create EmpHelppageTags', 'url'=>array('create')),
	array('label'=>'Manage EmpHelppageTags', 'url'=>array('admin')),
);
?>

<h1>Emp Helppage Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
