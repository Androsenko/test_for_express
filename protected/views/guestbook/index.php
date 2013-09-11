<?php
/* @var $this GuestbookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Гостевая книга',
);

$this->menu=array(
	array('label'=>'Добавить сообщение', 'url'=>array('create')),
	//array('label'=>'Редактировать сообщения', 'url'=>array('admin')),
);
?>

<h1>Гостевая книга</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'guestbook-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'Id', 'value'=>'$data->id', ),                
		'user',
		'email',
		array('name'=>'Домашняя страница', 'value'=>'$data->homepage', ),
		array('name'=>'Текст сообщения', 'value'=>'Guestbook::makeLink($data->text)', 'type'=>'html', ),
		'cdt', 
		array('name'=>'UA', 'value'=>'$data->ua', ),
		array('name'=>'IP', 'value'=>'$data->ip', ),
	),
)); ?>