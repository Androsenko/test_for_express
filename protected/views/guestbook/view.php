<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */

$this->breadcrumbs=array(
	'Гостевая книга'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Вернуться в гостевую книгу', 'url'=>array('index')),
	//array('label'=>'Create Guestbook', 'url'=>array('create')),
	//array('label'=>'Update Guestbook', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Guestbook', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Guestbook', 'url'=>array('admin')),
);
?>

<h1>Добавлено сообщение #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user',
		'email',
		'homepage',
		'text',
		'cdt',
		'ua',
		'ip',
	),
)); ?>
