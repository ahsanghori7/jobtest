<?php
/* @var $this EmpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emps',
);

$this->menu=array(
	array('label'=>'Create Emp', 'url'=>array('create')),
);
?>

<h1>Emps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
