<?php
/* @var $this ForsumController */
/* @var $model Forsum */

$this->breadcrumbs=array(
	'Forsum'=>array('forsum'),
	'Buat Perhitungan Baru'=>array('create'),
	// $data->id_forsum,
	'Pilih Bahan Pakan',
);

$this->menu=array(
	array('label'=>'List Forsum', 'url'=>array('index')),
	array('label'=>'Create Forsum', 'url'=>array('create')),
	array('label'=>'Update Forsum', 'url'=>array('update', 'id'=>$data->id_forsum)),
	array('label'=>'Delete Forsum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$data->id_forsum),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Forsum', 'url'=>array('admin')),
);
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

<!-- <h1>View Forsum #<?php echo $data->id_forsum; ?></h1> -->
<h1>Pilih Bahan Pakan</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'attributes'=>array(
		'nama_forsum',
		array(
            'name'=>'id_unggas',
            'value'=>$data->idUnggas->nama_unggas,
        ), 
	),
)); ?>
<br>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'category-form',
            'enableAjaxValidation' => false,
        ));
    ?>

<div class="row">
<div style="float: left; margin-left: 60px;">
<?php 
	$modelbaru = BahanPakan::model()->findAll();
	$type_list=CHtml::listData($modelbaru,'id_bahan','nama_bahan');
	echo $form->checkBoxList($modelBahan,'nama_bahan',$type_list,array('multiple'=>'multiple', 'separator'=>''));
?>
<?php echo $form->error($modelBahan,'nama_bahan'); ?>

</div>

 <div class="row buttons" style="margin-left:-80px">
        <?php echo CHtml::submitButton($modelBahan->isNewRecord ? 'Pilih' : 'Save'); ?>
    </div>
	<?php $this->endWidget(); ?>

<br>
<br>
<br>
<br>
<br>
<br>
