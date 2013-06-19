<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'projects-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
    'enableClientValidation'=>true,
    'htmlOptions' => array(
          'class' => 'new_user_form inline-input',
    ),
	'clientOptions'=>array(
						'validateOnSubmit'=>true,
    ),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldRow($model,'description_short',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textAreaRow($model,'description_large',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>45,'prepend'=>'http://')); ?>

	<?php echo $form->textFieldRow($model,'facebook',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'twitter',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'youtube',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'googleplus',array('class'=>'span5','maxlength'=>45)); ?>

	<?php 	
			echo $form->hiddenField($model,'datemodify',array('class'=>'span5 inline-input','value'=>date('Y-m-d H:i:s')));
		if ($model->isNewRecord) {
			echo $form->hiddenField($model,'users_id',array('class'=>'span5 inline-input','value'=>Yii::app()->user->id));
		}
	 echo $form->hiddenField($model,'users_id',array('class'=>'span5','value'=>'1')/*'value'=>Yii::app()->user->id)*/); ?>

	<?php //echo $form->textAreaRow($model,'url_logo',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php //echo $form->textFieldRow($model,'projects_status_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
