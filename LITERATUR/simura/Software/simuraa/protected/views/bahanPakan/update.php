<?php
/* @var $this BahanPakanController */
/* @var $model BahanPakan */

$this->breadcrumbs=array(
	//'Bahan Pakans'=>array('index'),
	'Daftar Bahan Pakan'=>array('listbahan'),
	//$model->nama_bahan=>array('view','id'=>$model->id_bahan),
	'Ubah Bahan Pakan',
);

$this->menu=array(
	array('label'=>'List BahanPakan', 'url'=>array('index')),
	array('label'=>'Create BahanPakan', 'url'=>array('create')),
	array('label'=>'View BahanPakan', 'url'=>array('view', 'id'=>$model->id_bahan)),
	array('label'=>'Manage BahanPakan', 'url'=>array('admin')),
);
?>

<!-- <h1>Update BahanPakan <?php echo $model->id_bahan; ?></h1> -->
<h1>Ubah Bahan Pakan</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>