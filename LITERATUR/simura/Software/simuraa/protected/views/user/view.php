<?php
/* @var $this UserController */
/* @var $model User */
$id=Yii::app()->user->id;

$this->breadcrumbs=array(
	//'Profil'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Profil</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'email',
		'nama_lengkap',
		'alamat_rumah',
		'nomor_telepon',
		'perusahaan',
	),
)); ?>
<br>

<div class="row buttons" style="margin-left: 34px;">
	<?php echo CHtml::button('Ubah Profil', array('onclick' => 'js:document.location.href="index.php?r=user/ubahprofil&id='.$id.'"')); ?>
</div>

	