<?php
$this->breadcrumbs=array(
	'Projects Statuses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProjectsStatus','url'=>array('index')),
	array('label'=>'Create ProjectsStatus','url'=>array('create')),
	array('label'=>'Update ProjectsStatus','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProjectsStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectsStatus','url'=>array('admin')),
);
?>

<h1>View ProjectsStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
