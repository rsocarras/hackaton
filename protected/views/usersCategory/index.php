<?php
$this->breadcrumbs=array(
	'Users Categories',
);

$this->menu=array(
	array('label'=>'Create UsersCategory','url'=>array('create')),
	array('label'=>'Manage UsersCategory','url'=>array('admin')),
);
?>

<h1>Users Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
