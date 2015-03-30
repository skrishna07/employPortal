<?php
/* @var $this EmpDocTagsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emp Doc Tags',
);

$this->menu=array(
	array('label'=>'Create EmpDocTags', 'url'=>array('create')),
	array('label'=>'Manage EmpDocTags', 'url'=>array('admin')),
);
?>

<h1>Emp Doc Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
