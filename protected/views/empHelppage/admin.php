<?php
/* @var $this EmpHelppageController */
/* @var $model EmpHelppage */

$this->breadcrumbs=array(
	'Emp Helppages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmpHelppage', 'url'=>array('index')),
	array('label'=>'Create EmpHelppage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#emp-helppage-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Emp Helppages</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'emp-helppage-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'page_id',
		'content',
		'content_uploadedby',
		'createdate',
		'updateddate',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
