<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */

$this->breadcrumbs=array(
	'Bahan Pakan Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BahanPakanCustom', 'url'=>array('index')),
	array('label'=>'Manage BahanPakanCustom', 'url'=>array('admin')),
);
?>

<h1>Create BahanPakanCustom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>