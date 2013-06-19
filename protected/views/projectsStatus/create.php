<?php
$this->breadcrumbs=array(
	'Projects Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectsStatus','url'=>array('index')),
	array('label'=>'Manage ProjectsStatus','url'=>array('admin')),
);
?>

<h1>Create ProjectsStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>