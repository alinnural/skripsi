<?php
/* @var $this ForsumController */
/* @var $model Forsum */

$this->breadcrumbs=array(
	'Forsums'=>array('index'),
	$model->id_forsum=>array('view','id'=>$model->id_forsum),
	'Update',
);

$this->menu=array(
	array('label'=>'List Forsum', 'url'=>array('index')),
	array('label'=>'Create Forsum', 'url'=>array('create')),
	array('label'=>'View Forsum', 'url'=>array('view', 'id'=>$model->id_forsum)),
	array('label'=>'Manage Forsum', 'url'=>array('admin')),
);
?>

<h1>Update Forsum <?php echo $model->id_forsum; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>