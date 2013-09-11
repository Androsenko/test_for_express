<?php
/* @var $this GuestbookController */
/* @var $data Guestbook */
?>

<tr class="view">
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage')); ?>:</b>
	<?php echo CHtml::encode($data->homepage); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('cdt')); ?>:</b>
	<?php echo CHtml::encode($data->cdt); ?>
</td>	
</tr>