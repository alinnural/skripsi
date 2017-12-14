<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */

$this->breadcrumbs=array(
	'Bahan Pakan Customs'=>array('index'),
	$model->id_bahan_custom=>array('view','id'=>$model->id_bahan_custom),
	'Update',
);

$this->menu=array(
	array('label'=>'List BahanPakanCustom', 'url'=>array('index')),
	array('label'=>'Create BahanPakanCustom', 'url'=>array('create')),
	array('label'=>'View BahanPakanCustom', 'url'=>array('view', 'id'=>$model->id_bahan_custom)),
	array('label'=>'Manage BahanPakanCustom', 'url'=>array('admin')),
);
?>

<h1>Update BahanPakanCustom <?php echo $model->id_bahan_custom; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>