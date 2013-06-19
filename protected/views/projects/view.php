<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Projects','url'=>array('index')),
	array('label'=>'Create Projects','url'=>array('create')),
	array('label'=>'Update Projects','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Projects','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projects','url'=>array('admin')),
);
?>

<h2>Project <?php echo $model->title; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	   'type'=>'bordered condensed',
	'attributes'=>array(
		'id',
		'title',
		'description_short',
		'description_large',
		'url',
		'facebook',
		'twitter',
		'youtube',
		'googleplus',
		'datecreate',
		'datemodify',
		'url_logo',
		'users_id',
		'projects_status_id',
	),
)); ?>
