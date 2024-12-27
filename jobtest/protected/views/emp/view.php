<?php
/* @var $this EmpController */
/* @var $model Emp */

$this->breadcrumbs=array(
	'Emps'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Emp', 'url'=>array('index')),
	array('label'=>'Create Emp', 'url'=>array('create')),
	array('label'=>'Update Emp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Emp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Emp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'password',
	),
)); ?>
