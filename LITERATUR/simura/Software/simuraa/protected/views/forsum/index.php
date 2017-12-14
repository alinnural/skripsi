<?php
/* @var $this ForsumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forsums',
);

$this->menu=array(
	array('label'=>'Create Forsum', 'url'=>array('create')),
	array('label'=>'Manage Forsum', 'url'=>array('admin')),
);
?>

<h1>Forsums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
