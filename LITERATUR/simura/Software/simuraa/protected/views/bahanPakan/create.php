<?php
/* @var $this BahanPakanController */
/* @var $model BahanPakan */

$this->breadcrumbs=array(
	'Bahan Pakans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BahanPakan', 'url'=>array('index')),
	array('label'=>'Manage BahanPakan', 'url'=>array('admin')),
);
?>

<h1>Create BahanPakan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>