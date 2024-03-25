<?php
// Data
// inloki_data
// Localização (Pais)
// inloki_localizacao_pais

$inloki_data = get_field('inloki_data',$post->ID);
if($inloki_data): ?>
	<div class="inloki_fields inloki_data">
		<!-- <b><?php echo __('Data:','inlokipt'); ?></b> -->
		<b><?php echo __('Date:','inlokipt'); ?></b>
		<span><?php 
			foreach ($inloki_data as $key => $inloki_datas) {
				echo '<span class="datas">'.$inloki_datas.'</span>';
			}
		?></span>
	</div>
<?php endif;

$inloki_localizacao_pais = get_field('inloki_localizacao_pais',$post->ID);
if($inloki_localizacao_pais): ?>
	<div class="inloki_fields inloki_localizacao_pais">
		<!-- <b><?php echo __('Localização (Pais):','inlokipt'); ?></b> -->
		<b><?php echo __('Location (Country):','inlokipt'); ?></b>
		<span><?php echo $inloki_localizacao_pais; ?></span>
	</div>
<?php endif;