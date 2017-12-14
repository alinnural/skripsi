<?php
/* @var $this BahanPakanController */
/* @var $model BahanPakan */
// print_r(count($nutrien_bahan));


$this->breadcrumbs=array(
	'Daftar Bahan Pakan'=>array('listbahan'),
	'Nutrien Bahan Pakan',
	);

$this->menu=array(
	array('label'=>'List BahanPakan', 'url'=>array('index')),
	array('label'=>'Create BahanPakan', 'url'=>array('create')),
	array('label'=>'Manage BahanPakan', 'url'=>array('admin')),
);
?>

<h1>Nutrien Bahan Pakan<?php?></h1>

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

<table width="250">
  <tr style="text-align: left; height: 35px;">
  	<th bgcolor="#0e5bce" style="color: white;">Nama Nutrien</th>
    <th bgcolor="0e5bce" style="color: white;">Komposisi</th>
  </tr>
<?php for($i = 0; $i< count($nutrien_bahan);$i++){ ?>
  <tr>
  	<td> <?php echo $namaNut[$i];?> </td>
    <td> <?php echo $nutrien_bahan[$i]->komposisi_nutrien;?> </td>
    <?php } ?>
  </tr>

</table> 
 <div style="color:#0e5bce">____________________________________</div>

<br>

 <div class="row buttons" style="margin-left: 20px">
	<?php echo CHtml::button('Kembali', array('onclick' => 'js:document.location.href="index.php?r=bahanPakan/listbahan"')); ?>
</div>
