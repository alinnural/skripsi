<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Login'=>array('site/login'),
	'Daftar Akun',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Daftar Akun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>