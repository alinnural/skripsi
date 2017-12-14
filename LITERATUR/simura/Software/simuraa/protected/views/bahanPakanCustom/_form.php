	<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bahan-pakan-custom-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<div class="row">
	    <?php $this->widget('application.extensions.appendo.JAppendo',array(
        	'id' => 'repeateEnum',        
        	'model' => $model,
        	'viewName' => 'bpcustom',
        	'labelDel' => 'Remove Row',
       		// 'cssFile' => 'css/jquery.appendo2.css'
    	)); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->