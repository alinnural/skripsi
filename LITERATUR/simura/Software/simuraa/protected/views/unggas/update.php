<?php
/* @var $this UnggasController */
/* @var $model Unggas */

$this->breadcrumbs=array(
	'Unggases'=>array('index'),
	$model->id_unggas=>array('view','id'=>$model->id_unggas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Unggas', 'url'=>array('index')),
	array('label'=>'Create Unggas', 'url'=>array('create')),
	array('label'=>'View Unggas', 'url'=>array('view', 'id'=>$model->id_unggas)),
	array('label'=>'Manage Unggas', 'url'=>array('admin')),
);
?>

<h1>Update Unggas <?php echo $model->id_unggas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>