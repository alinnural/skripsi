<?php
/* @var $this ForsumController */
/* @var $model Forsum */

$this->breadcrumbs=array(
	'Forsum'=>array('forsum'),
	'Lihat Perhitungan Sebelumnya',
);

$this->menu=array(
	array('label'=>'List Forsum', 'url'=>array('index')),
	array('label'=>'Manage Forsum', 'url'=>array('admin')),
);
?>

<h1>Lihat Perhitungan Sebelumnya</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'forsum-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'nama_forsum',
		'id_unggas',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>
