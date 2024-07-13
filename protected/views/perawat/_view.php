<?php
/* @var $this PerawatController */
/* @var $data Perawat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perawat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_perawat), array('view', 'id'=>$data->id_perawat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telepon')); ?>:</b>
	<?php echo CHtml::encode($data->no_telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />


</div>