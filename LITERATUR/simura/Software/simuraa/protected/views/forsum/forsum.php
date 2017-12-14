<?php
/* @var $this ForsumController */
/* @var $model Forsum */

$this->breadcrumbs=array(
	//'Forsums'=>array('index'),
	'Forsum',
);

$this->menu=array(
	array('label'=>'List Forsum', 'url'=>array('index')),
	array('label'=>'Manage Forsum', 'url'=>array('admin')),
);
?>

<h1>Formulasi Ransum</h1>
<?php
$gambara = CHtml::image("images/newfile.png", "images", array("width"=>50));
echo CHtml::link($gambara, array('forsum/create'));
?>
<a href="http://localhost/simuraa/index.php?r=forsum/create">   Buat Perhitungan Baru</a>
<br>
<br>
<?php
$gambarb = CHtml::image("images/openfile.png", "images", array("width"=>50));
echo CHtml::link($gambarb, array('forsum/bukafile'));
?>
<a href="http://localhost/simuraa/index.php?r=forsum/bukafile">   Lihat Perhitungan Sebelumnya</a>