<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */

$this->breadcrumbs=array(
	'Guestbooks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Guestbook', 'url'=>array('index')),
	array('label'=>'Create Guestbook', 'url'=>array('create')),
	array('label'=>'View Guestbook', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Guestbook', 'url'=>array('admin')),
);
?>

<h1>Update Guestbook <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>