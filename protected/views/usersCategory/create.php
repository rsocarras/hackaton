<?php
$this->breadcrumbs=array(
	'Users Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersCategory','url'=>array('index')),
	array('label'=>'Manage UsersCategory','url'=>array('admin')),
);
?>

<h1>Create UsersCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>