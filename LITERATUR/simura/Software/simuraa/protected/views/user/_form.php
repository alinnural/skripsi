<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_lengkap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_rumah'); ?>
		<?php echo $form->textField($model,'alamat_rumah',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'alamat_rumah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomor_telepon'); ?>
		<?php echo $form->textField($model,'nomor_telepon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nomor_telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perusahaan'); ?>
		<?php echo $form->textField($model,'perusahaan',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'perusahaan'); ?>
	</div>
	<br>

	<div class="row buttons" style="margin-left: 10px">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->