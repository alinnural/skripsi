<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bahan_custom'); ?>
		<?php echo $form->textField($model,'id_bahan_custom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_forsum'); ?>
		<?php echo $form->textField($model,'id_forsum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bahan'); ?>
		<?php echo $form->textField($model,'id_bahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_bahan_custom'); ?>
		<?php echo $form->textField($model,'min_bahan_custom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_bahan_custom'); ?>
		<?php echo $form->textField($model,'max_bahan_custom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_bahan_custom'); ?>
		<?php echo $form->textField($model,'harga_bahan_custom'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->