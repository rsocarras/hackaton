<?php
$this->breadcrumbs=array(
	'Projects Statuses',
);

$this->menu=array(
	array('label'=>'Create ProjectsStatus','url'=>array('create')),
	array('label'=>'Manage ProjectsStatus','url'=>array('admin')),
);
?>

<h1>Projects Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
