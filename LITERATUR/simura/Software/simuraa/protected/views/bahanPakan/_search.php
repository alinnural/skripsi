<?php
/* @var $this BahanPakanController */
/* @var $model BahanPakan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bahan'); ?>
		<?php echo $form->textField($model,'id_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_bahan'); ?>
		<?php echo $form->textField($model,'nama_bahan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_sumber'); ?>
		<?php echo $form->textField($model,'jenis_sumber',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_bahan_default'); ?>
		<?php echo $form->textField($model,'min_bahan_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_bahan_default'); ?>
		<?php echo $form->textField($model,'max_bahan_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_bahan_default'); ?>
		<?php echo $form->textField($model,'harga_bahan_default'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->