<?php
/* @var $this EmpRegistrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emp Registrations',
);

$this->menu=array(
	array('label'=>'Create EmpRegistration', 'url'=>array('create')),
	array('label'=>'Manage EmpRegistration', 'url'=>array('admin')),
);
?>

<h1>Emp Registrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
