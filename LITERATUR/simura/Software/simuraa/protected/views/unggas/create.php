<?php
/* @var $this UnggasController */
/* @var $model Unggas */

$this->breadcrumbs=array(
	'Daftar Unggas'=>array('listunggas'),
	'Tambah Jenis Unggas',
);

$this->menu=array(
	array('label'=>'List Unggas', 'url'=>array('index')),
	array('label'=>'Manage Unggas', 'url'=>array('admin')),
);
?>

<h1>Tambah Jenis Unggas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>