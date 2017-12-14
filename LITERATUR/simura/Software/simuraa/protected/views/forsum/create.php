<?php
/* @var $this ForsumController */
/* @var $model Forsum */

$this->breadcrumbs=array(
	'Forsum'=>array('forsum'),
	'Buat Perhitungan Baru',
);

$this->menu=array(
	array('label'=>'List Forsum', 'url'=>array('index')),
	array('label'=>'Manage Forsum', 'url'=>array('admin')),
);
?>

<h1>Buat Perhitungan Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>