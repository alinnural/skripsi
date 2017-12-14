<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */

$this->breadcrumbs=array(
	'Bahan Pakan Customs'=>array('index'),
	$model->id_bahan_custom,
);

$this->menu=array(
	array('label'=>'List BahanPakanCustom', 'url'=>array('index')),
	array('label'=>'Create BahanPakanCustom', 'url'=>array('create')),
	array('label'=>'Update BahanPakanCustom', 'url'=>array('update', 'id'=>$model->id_bahan_custom)),
	array('label'=>'Delete BahanPakanCustom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bahan_custom),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BahanPakanCustom', 'url'=>array('admin')),
);
?>

<h1>View BahanPakanCustom #<?php echo $model->id_bahan_custom; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bahan_custom',
		'id_forsum',
		'id_bahan',
		'min_bahan_custom',
		'max_bahan_custom',
		'harga_bahan_custom',
	),
)); ?>