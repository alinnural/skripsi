<?php
/* @var $this ForsumController */
/* @var $model Forsum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'forsum-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->label($model,'nama_forsum'); ?>
		<?php echo $form->textField($model,'nama_forsum'); ?>
		<?php echo $form->error($model,'nama_forsum'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'id_user'); ?>
		<?php echo $form->hiddenField($model,'id_user', array(
			'value'=>Yii::app()->user->id, 'visible')); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unggas'); ?>
		<?php echo $form->dropDownList($model,'id_unggas',CHtml::listData(Unggas::model()->findAll(), 'id_unggas', 'nama_unggas'), array('empty'=>'- Pilih Unggas -')); ?>
		<?php echo $form->error($model,'id_unggas'); ?>
	</div>

	<div class="row buttons" style= "margin-left: 10px">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Buat Perhitungan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->