<?php
/* @var $this UnggasController */
/* @var $model Unggas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unggas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->label($model,'nama_unggas'); ?>
		<?php echo $form->textField($model,'nama_unggas',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_unggas'); ?>
	</div>

	<div class="row buttons" style="margin-left: 10px">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->