<?php
$this->breadcrumbs=array(
	'Users Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersCategory','url'=>array('index')),
	array('label'=>'Create UsersCategory','url'=>array('create')),
	array('label'=>'View UsersCategory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage UsersCategory','url'=>array('admin')),
);
?>

<h1>Update UsersCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>