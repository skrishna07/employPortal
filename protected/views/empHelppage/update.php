<?php
/* @var $this EmpHelppageController */
/* @var $model EmpHelppage */

$this->breadcrumbs=array(
	'Emp Helppages'=>array('index'),
	$model->page_id=>array('view','id'=>$model->page_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpHelppage', 'url'=>array('index')),
	array('label'=>'Create EmpHelppage', 'url'=>array('create')),
	array('label'=>'View EmpHelppage', 'url'=>array('view', 'id'=>$model->page_id)),
	array('label'=>'Manage EmpHelppage', 'url'=>array('admin')),
);
?>

<h1>Update EmpHelppage <?php echo $model->page_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>