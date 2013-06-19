<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldRow($model,'description_short',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textAreaRow($model,'description_large',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'facebook',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'twitter',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'youtube',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'googleplus',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'datecreate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datemodify',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'url_logo',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'users_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'projects_status_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
