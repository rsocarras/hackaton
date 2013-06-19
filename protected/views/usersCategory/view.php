<?php
$this->breadcrumbs=array(
	'Users Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List UsersCategory','url'=>array('index')),
	array('label'=>'Create UsersCategory','url'=>array('create')),
	array('label'=>'Update UsersCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete UsersCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersCategory','url'=>array('admin')),
);
?>

<h1>View UsersCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
