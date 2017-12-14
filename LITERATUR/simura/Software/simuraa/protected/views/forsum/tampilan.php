<?php
/* @var $this BahanPakanCustomController */
/* @var $model BahanPakanCustom */
$this->breadcrumbs=array(
  'Forsum'=>array('forsum'),
  'Buat Perhitungan Baru'=>array('create'),
  'Hasil Perhitungan'
  );

$this->menu=array(
	array('label'=>'List BahanPakanCustom', 'url'=>array('index')),
	array('label'=>'Manage BahanPakanCustom', 'url'=>array('admin')),
);
?>

<h1>Hasil Perhitungan</h1>

<?php if ($data2=="tidak")
    {
      echo "Hasil ransum tidak optimal";
    }

    else {
?>

  <label for="numb">Harga :  Rp<?php echo number_format($data1, 0, '', '.') ?>/kg </label>
  <br>

<table width="330">
  <tr style="text-align: left; height: 35px;">
  	<th bgcolor="#0e5bce" style="color: white;">Nama Bahan Pakan</th>
    <th bgcolor="0e5bce" style="color: white; text-align: right;">Persentase</th>
    <th bgcolor="0e5bce" style="color: white; text-align: right;">Unit (gram)</th>
  </tr>
<?php foreach ($data2 as $key => $value) {?>
  <tr>
  	<td> <label for="numb"><?php echo $nama[$idBahan[$key]] ?></label>  </td>
    <!-- <td> <?php //echo $value*100 ?>% </td> -->
    <td style="text-align: right;"> <?php echo floatval(number_format($value*100, 2, '.', ',')) ?>% </td>
    <td style="text-align: right;"> <?php echo floatval(number_format($value*1000, 1, '.', ',')) ?></td>
    <?php } ?>
  </tr>

</table> 
 <div style="color:#0e5bce">___________________________________________</div>

<br>

<?php }
?>

<div class="row buttons" style="margin-left:123px">
	<?php echo CHtml::button('Keluar', array('onclick' => 'js:document.location.href="index.php?r=forsum/create"')); ?>
</div>