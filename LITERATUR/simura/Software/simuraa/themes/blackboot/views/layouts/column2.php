<?php $this->beginContent('//layouts/main'); ?>
      <div class="row-fluid">
        <div class="span3">
         <?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Menu',
			));
			$id=Yii::app()->user->id;
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu=array(
						array('label'=>'Beranda', 'url'=>array('site/index')),
						array('label'=>'Profil', 'url'=>array('user/view&id='.$id.'')),
						array('label'=>'Daftar Kebutuhan Nutrien Unggas', 'url'=>array('unggas/listunggas')),
						array('label'=>'Daftar Bahan Pakan', 'url'=>array('bahanPakan/listbahan')),
						array('label'=>'Formulasi Ransum', 'url'=>array('forsum/create')),
						array('label'=>'Tentang Kami', 'url'=>array('site/tentangkami')),
						),
				'htmlOptions'=>array('class'=>'sidebar'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar span3 -->

	<div class="span9" >
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
