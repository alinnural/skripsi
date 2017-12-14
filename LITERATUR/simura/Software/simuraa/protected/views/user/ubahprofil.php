<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	//'Profil'=>array('index'),
	$model->username=>array('view','id'=>$model->id_user),
	'Ubah Profil',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Ubah Profil</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>