<?php
/* @var $this UnggasController */
/* @var $model Unggas */

$this->breadcrumbs=array(
	//'Unggas'=>array('index'),
	'Daftar Unggas',
);

$this->menu=array(
	array('label'=>'List Unggas', 'url'=>array('index')),
	array('label'=>'Create Unggas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unggas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Unggas</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'unggas-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'nama_unggas',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>
<br>
<div class="row buttons" style="margin-left: 230px;">
	<?php echo CHtml::button('Tambah Unggas', array('onclick' => 'js:document.location.href="index.php?r=unggas/create"')); ?>
</div>
