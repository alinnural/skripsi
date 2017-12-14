<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */
// print_r($data);
// exit();
$this->breadcrumbs=array(
  'Forsum'=>array('forsum'),
  'Buat Perhitungan Baru'=>array('create'),
  'Kriteria Bahan Pakan'
  );

$this->menu=array(
	array('label'=>'List BahanPakanCustom', 'url'=>array('index')),
	array('label'=>'Manage BahanPakanCustom', 'url'=>array('admin')),
);
?>

<h1>Kriteria Bahan Pakan</h1>
<?php $label = array("",
					"Jagung Lokal",
					"Jagung Import",
					"Dedak Halus",
					"Bekatul",
					"Pollard",
					"Gaplek",
					"Sorgum",
					"Bungkil Kedelai",
					"Biji Kedelai",
					"Corn Gluten Feed(CGF)",
					"Corn Gluten Meal(CGM)",
					"Bungkil Kacang Tanah",
					"Bungkil Kapuk",
					"Bungkil Kelapa",
					"Bungkil Kelapa Sawit",
					"Meat Bone Meal(MBM)",
					"Tepung Ikan",
					"Tepung Cacing",
					"Tepung Darah",
					"Manure Ayam",
					"Minyak Ikan",
					"CPO",
					"Molases",
					"Garam",
					"Tepung Keong",
					"Kapur",
					"CaCO3",
					"DCP",
					"MCP",
					"L-Lysin",
					"DL-Methionine",
					"Premix",
					"Premix Broiler",
					"Premix Layer",
					);

	$harga = array("",
					"3800",
					"4000",
					"2300",
					"2200",
					"2500",
					"3000",
					"3000",
					"7500",
					"5000",
					"3500",
					"7000",
					"6000",
					"2000",
					"2500",
					"2800",
					"7000",
					"7500",
					"4000",
					"5000",
					"1000",
					"10000",
					"5000",
					"2000",
					"1500",
					"2500",
					"500",
					"750",
					"20000",
					"15000",
					"50000",
					"70000",
					"30000",
					"40000",
					"50000",
					);

	$min_bahan = array("",
					"25",
					"25",
					"0",
					"0",
					"0",
					"0",
					"0",
					"5",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"1",
					"0",
					"0.25",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0",
					"0.1",
					"0.1",
					"0.1",
					);

	$max_bahan = array("",
					"50",
					"50",
					"15",
					"15",
					"6",
					"10",
					"15",
					"40",
					"20",
					"7",
					"7",
					"5",
					"3",
					"5",
					"10",
					"7",
					"8",
					"15",
					"3",
					"5",
					"2",
					"4",
					"5",
					"0.5",
					"8",
					"2",
					"2",
					"1",
					"1",
					"0.3",
					"0.3",
					"0.25",
					"0.25",
					"0.25",
					);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bahan-pakan-custom-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php $dat = $data['nama_bahan'];?>

<table width="900">
  <tr style="text-align: left; height: 35px;">
  	<th bgcolor="#0e5bce" style="color: white;">&nbsp; &nbsp; Bahan Pakan</th>
  	<th bgcolor="#0e5bce" style="color: white;">Harga (Rp)</th>
    <th bgcolor="0e5bce" style="color: white;">Minimal (Persentase)</th>
    <th bgcolor="0e5bce" style="color: white;">Maksimal (Persentase)</th>
  </tr>
  
	<input type="hidden" name="datahitung">
		<?php $dat = $data['nama_bahan'];
		foreach ($dat as $key => $value) {
	?>

 	 <tr>  	
  		<input type="hidden" name="idBahan<?php echo $label[$value] ?>" value=<?php echo $value?>>
		<td> <label for="numb"> <?php echo $label[$value] ?></label> </td>
		<td><label for="numb"> </label> <input style="text-align: right" type="number" min="500" max="100000" value=<?php echo $harga[$value]?> step="50" name="harga<?php echo $label[$value] ?>"></td>
		<td><label for="numb"> </label> <input style="text-align: right" type="number" min="0" max="100" value=<?php echo $min_bahan[$value]?> step="0.05" name="min<?php echo $label[$value] ?>"></td>
		<td><label for="numb"> </label> <input style="text-align: right" type="number" min="0" max="100" value=<?php echo $max_bahan[$value]?> step="0.05" name="max<?php echo $label[$value] ?>"></td>
	</tr>
  	<?php } ?>
</table> 

<br>
	<div class="row buttons" style="margin-left:660px">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Hitung' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>