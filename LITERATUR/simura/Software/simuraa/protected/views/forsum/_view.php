<?php
/* @var $this ForsumController */
/* @var $data Forsum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_forsum')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_forsum), array('view', 'id'=>$data->id_forsum)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unggas')); ?>:</b>
	<?php echo CHtml::encode($data->id_unggas); ?>
	<br />


</div>