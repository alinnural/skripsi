<table class="appendo-gii" id="<?php echo $id ?>">
	<thead>
		<tr>
			<th>Nama Bahan</th><th>Minimum</th><th>Maksimum</th>
		</tr>
	</thead>
	<tbody>
    <?php if ($model->nama_bahan == null): ?>
		<tr>
			<td><?php echo CHtml::textField('nama_bahan[]','',array('style'=>'width:120px')); ?></td>
            <td><?php echo CHtml::textField('min_bahan_default[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('max_bahan_default[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->nama_bahan); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('nama_bahan[]',$model->enum_name[$i],array('style'=>'width:120px')); ?></td>
                <td><?php echo CHtml::textField('min_bahan_default[]',$model->enum_min[$i],array('style'=>'width:90px')); ?></td>
                <td><?php echo CHtml::textField('max_bahan_default[]',$model->enum_max[$i],array('style'=>'width:90px')); ?></td>
            </tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('nama_bbahan[]','',array('style'=>'width:120px')); ?></td>
            <td><?php echo CHtml::textField('min_bahan_default[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('max_bahan_default[]','',array('style'=>'width:90px')); ?></td>
		</tr>
    <?php endif; ?>
	</tbody>
</table>