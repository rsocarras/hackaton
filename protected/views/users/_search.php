<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'account',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'birthday',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datecreate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datemodify',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'session',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'users_category_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
