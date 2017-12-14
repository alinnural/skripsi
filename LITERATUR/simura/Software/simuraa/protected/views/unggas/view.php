<?php
/* @var $this UnggasController */
/* @var $model Unggas */

$this->breadcrumbs=array(
	// 'Unggases'=>array('index'),
	'Daftar Unggas'=>array('listunggas'),
	 // $model->nama_unggas,
	'Kebutuhan Nutrien Unggas',
);

$this->menu=array(
	array('label'=>'List Unggas', 'url'=>array('index')),
	array('label'=>'Create Unggas', 'url'=>array('create')),
	array('label'=>'Manage Unggas', 'url'=>array('admin')),
);
?>

<h1>Kebutuhan Nutrien Unggas</h1>

<?php $namaNut = array("Bahan Kering",
					"Abu",
					"Protein Kasar",
					"Lemak Kasar",
					"Serat Kasar",
					"BetaN",
					"Energi Metabolisme",
					"Kalsium",
					"Phospor Total",
					"Phospor Tersedia",
					"Lysin",
					"Methionin",
					);
?>

<table width="400">
  <tr style="text-align: left; height: 35px;">
  	<th bgcolor="#0e5bce" style="color: white;">Nama Nutrien</th>
    <th bgcolor="0e5bce" style="color: white;">Nilai Minimal</th>
    <th bgcolor="0e5bce" style="color: white;">Nilai Maksimal</th>
  </tr>
<?php for($i = 0; $i< count($nutrien_unggas);$i++){ ?>
  <tr>
  	<td> <?php echo $namaNut[$i];?> </td>
    <td> <?php echo $nutrien_unggas[$i]->min_nutrien;?> </td>
    <td> <?php echo $nutrien_unggas[$i]->max_nutrien;?> </td>
    <?php } ?>
  </tr>

</table> 
<div style="color:#0e5bce">_________________________________________________________</div>

<br>

<div class="row buttons" style="margin-left:-140px">
	<?php echo CHtml::button('Tambah Nutrien', array('onclick' => 'js:document.location.href="index.php?r=unggas/nutrienunggas&id='.$id.'"')); ?>
	<?php echo CHtml::button('Kembali', array('onclick' => 'js:document.location.href="index.php?r=unggas/listunggas"')); ?>
</div>


	
