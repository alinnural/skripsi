<?php
/* @var $this BahanPakanCustomController */
/* @var $data BahanPakanCustom */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bahan_custom')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bahan_custom), array('view', 'id'=>$data->id_bahan_custom)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_forsum')); ?>:</b>
	<?php echo CHtml::encode($data->id_forsum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bahan')); ?>:</b>
	<?php echo CHtml::encode($data->id_bahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_bahan_custom')); ?>:</b>
	<?php echo CHtml::encode($data->min_bahan_custom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_bahan_custom')); ?>:</b>
	<?php echo CHtml::encode($data->max_bahan_custom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_bahan_custom')); ?>:</b>
	<?php echo CHtml::encode($data->harga_bahan_custom); ?>
	<br />


</div>