<?php
/* @var $this BahanPakanController */
/* @var $data BahanPakan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bahan), array('view', 'id'=>$data->id_bahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_bahan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_bahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_sumber')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_sumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_bahan_default')); ?>:</b>
	<?php echo CHtml::encode($data->min_bahan_default); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_bahan_default')); ?>:</b>
	<?php echo CHtml::encode($data->max_bahan_default); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_bahan_default')); ?>:</b>
	<?php echo CHtml::encode($data->harga_bahan_default); ?>
	<br />

</div>