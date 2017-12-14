<?php
/* @var $this UnggasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unggases',
);

$this->menu=array(
	array('label'=>'Create Unggas', 'url'=>array('create')),
	array('label'=>'Manage Unggas', 'url'=>array('admin')),
);
?>

<h1>Unggases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
