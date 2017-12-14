<?php
/* @var $this UnggasController */
/* @var $model Unggas */

$this->breadcrumbs=array(
	'Daftar Unggas'=>array('listunggas'),
	'Tambah Jenis Unggas'=> array('create'),
	'Tambah Kebutuhan Nutrien Unggas',
);

$this->menu=array(
	array('label'=>'List Unggas', 'url'=>array('index')),
	array('label'=>'Manage Unggas', 'url'=>array('admin')),
);
?>

<h1>Tambah Kebutuhan Nutrien Unggas</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unggas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($modelNutrien); ?>

	<div class="row">
		<?php echo $form->hiddenField($modelNutrien,'id_unggas', array(
			'value'=>$idUng, 'visible')); ?>
		<?php echo $form->error($modelNutrien,'id_unggas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($modelNutrien,'nama_nutrien'); ?>
		<?php echo $form->dropDownList($modelNutrien,'id_nutrien',CHtml::listData(Nutrien::model()->findAll(), 'id_nutrien', 'nama_nutrien'), array('empty'=>'- Pilih Nutrien -')); ?>
		<?php echo $form->error($modelNutrien,'id_nutrien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($modelNutrien,'min_nutrien'); ?>
		<?php echo $form->textField($modelNutrien,'min_nutrien'); ?>
		<?php echo $form->error($modelNutrien,'min_nutrien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($modelNutrien,'max_nutrien'); ?>
		<?php echo $form->textField($modelNutrien,'max_nutrien'); ?>
		<?php echo $form->error($modelNutrien,'max_nutrien'); ?>
	</div>

	<div class="row buttons" style="margin-left: 10px">
		<?php echo CHtml::submitButton($modelNutrien->isNewRecord ? 'Tambah' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->