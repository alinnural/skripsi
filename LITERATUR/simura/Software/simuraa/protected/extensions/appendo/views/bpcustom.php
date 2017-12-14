<table class="appendo-gii" id="<?php echo $id ?>">
    <thead>
        <tr>
            <th>Id Bahan</th>
            <th>Id Forsum</th>
            <th>Harga</th>          
            <th>Minimal</th>
            <th>Maksimal</th>
        </tr>
    </thead>
    <tbody>
    <?php 

    if ($model->id_bahan_custom == null): ?>
        <tr>
            <td><?php echo CHtml::textField('id_bahan[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('id_forsum[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('harga_bahan_custom[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('min_bahan_custom[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('max_bahan_custom[]','',array('style'=>'width:90px')); ?></td>
            </td>
        </tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->id_bahan_custom); ++$i): ?>
            <tr>
                <td><?php echo CHtml::textField('id_bahan[]',$model->enum_value[$i],array('style'=>'width:90px')); ?></td>
                <td><?php echo CHtml::textField('id_forsum[]',$model->enum_value[$i],array('style'=>'width:90px')); ?></td>
                <td><?php echo CHtml::textField('harga_bahan_custom[]',$model->enum_value[$i],array('style'=>'width:90px')); ?></td>
                <td><?php echo CHtml::textField('min_bahan_custom[]',$model->enum_value[$i],array('style'=>'width:90px')); ?></td>
                <td><?php echo CHtml::textField('max_bahan_custom[]',$model->enum_value[$i],array('style'=>'width:90px')); ?></td>
            </tr>
        <?php endfor; ?>
        <tr>
            <td><?php echo CHtml::textField('id_bahan[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('id_forsum[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('harga_bahan_custom[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('min_bahan_custom[]','',array('style'=>'width:90px')); ?></td>
            <td><?php echo CHtml::textField('max_bahan_custom[]','',array('style'=>'width:90px')); ?></td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>