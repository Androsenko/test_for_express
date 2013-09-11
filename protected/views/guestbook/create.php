<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */

$this->breadcrumbs=array(
	'Гостевая книга'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Вернуться в гостевую книгу', 'url'=>array('index')),
	//array('label'=>'Manage Guestbook', 'url'=>array('admin')),
);
?>

<h1>Добавить запись</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>