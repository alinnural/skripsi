<?php
/* @var $this BahanPakanCustomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bahan Pakan Customs',
);

$this->menu=array(
	array('label'=>'Create BahanPakanCustom', 'url'=>array('create')),
	array('label'=>'Manage BahanPakanCustom', 'url'=>array('admin')),
);
?>

<h1>Bahan Pakan Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
