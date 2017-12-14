<?php
/* @var $this BahanPakanController */
/* @var $model BahanPakan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bahan-pakan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_bahan'); ?>
		<?php echo $form->textField($model,'nama_bahan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_sumber'); ?>
		<?php echo $form->textField($model,'jenis_sumber',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'jenis_sumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_bahan_default'); ?>
		<?php echo $form->textField($model,'min_bahan_default'); ?>
		<?php echo $form->error($model,'min_bahan_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_bahan_default'); ?>
		<?php echo $form->textField($model,'max_bahan_default'); ?>
		<?php echo $form->error($model,'max_bahan_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_bahan_default'); ?>
		<?php echo $form->textField($model,'harga_bahan_default'); ?>
		<?php echo $form->error($model,'harga_bahan_default'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->