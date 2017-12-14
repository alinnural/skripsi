<?php
/* @var $this UnggasController */
/* @var $data Unggas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unggas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_unggas), array('view', 'id'=>$data->id_unggas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_unggas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_unggas); ?>
	<br />


</div>