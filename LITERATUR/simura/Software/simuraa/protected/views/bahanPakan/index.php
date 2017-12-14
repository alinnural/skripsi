<?php
/* @var $this BahanPakanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bahan Pakans',
);

$this->menu=array(
	array('label'=>'Create BahanPakan', 'url'=>array('create')),
	array('label'=>'Manage BahanPakan', 'url'=>array('admin')),
);
?>

<h1>Bahan Pakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
