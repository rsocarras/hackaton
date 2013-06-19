<?php
$this->breadcrumbs=array(
	'Projects Statuses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectsStatus','url'=>array('index')),
	array('label'=>'Create ProjectsStatus','url'=>array('create')),
	array('label'=>'View ProjectsStatus','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ProjectsStatus','url'=>array('admin')),
);
?>

<h1>Update ProjectsStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>