<table class="appendo-gii" id="<?php echo $id ?>">
    <thead>
        <tr>
            <th>Nama </th><th>Nilai</th><th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($model->nama == null): ?>
        <tr>
            <td><?php echo CHtml::textField('nama[]','',array('style'=>'width:120px')); ?></td>
            <td><?php echo CHtml::textField('nilai[]','',array('style'=>'width:90px')); ?></td>
            <td>
            <?php echo CHtml::dropDownList('jk[]',"string",
                array(
                    "Laki-laki"=>"Laki-laki",
                    "Perempuan"=>"Perempuan",
                ),array('style'=>'width:100px'));
            ?>
            </td>
        </tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->nama); ++$i): ?>
            <tr>
                <td><?php echo CHtml::textField('nama[]',$model->enum_name[$i],array('style'=>'width:120px')); ?></td>
                <td><?php echo CHtml::textField('nilai[]',$model->enum_value[$i],array('style'=>'width:90px')); ?></td>
                <td>
                <?php echo CHtml::dropDownList('jk[]',$model->enum_type[$i],
                    array(
                        "Laki-laki"=>"Laki-laki",
                        "Perempuan"=>"Perempuan",
                    ),array('style'=>'width:100px'));
                ?>
                </td>
            </tr>
        <?php endfor; ?>
        <tr>
            <td><?php echo CHtml::textField('nama[]','',array('style'=>'width:120px')); ?></td>
            <td><?php echo CHtml::textField('nilai[]','',array('style'=>'width:90px')); ?></td>
            <td>
            <?php echo CHtml::dropDownList('jk[]',"string",
                array(
                        "Laki-laki"=>"Laki-laki",
                        "Perempuan"=>"Perempuan",
                    ),array('style'=>'width:100px'));
            ?>
            </td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>