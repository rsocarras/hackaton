<?php
$this->breadcrumbs=array(
	'Milestones'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Milestone','url'=>array('index')),
	array('label'=>'Create Milestone','url'=>array('create')),
	array('label'=>'Update Milestone','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Milestone','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Milestone','url'=>array('admin')),
);
?>

<h1>View Milestone #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'due_date',
		'datecreate',
		'datemodify',
		'status',
		'users_id',
		'projects_id',
	),
)); ?>
