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
	
	array('label'=>'Manage EmpDocument', 'url'=>array('admin')),
);
?>

<h1>View EmpDocument #<?php echo $model->doc_id; ?></h1>
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
<div class="view">

	<?php echo CHtml::link("download", array('download', 'id'=>$model->doc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('doc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->doc_id), array('view', 'id'=>$model->doc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('document')); ?>:</b>
	<?php echo CHtml::encode($model->document); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('doc_uploadedby')); ?>:</b>
	<?php echo CHtml::encode($model->doc_uploadedby); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('createdate')); ?>:</b>
	<?php echo CHtml::encode($model->createdate); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($model->updatedate); ?>
	<br />


</div>