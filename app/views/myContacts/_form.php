<?php
/* @var $this MyContactsController */
/* @var $model MyContacts */
/* @var $form BSActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'my-contacts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'htmlOptions' => array(
        'class' => 'bs-example bs-example-control-sizing'
    )
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'last_name',array('maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'first_name',array('maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'phone',array('maxlength'=>11)); ?>

            <?php echo $form->textFieldControlGroup($model,'email',array('maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'gender',array('maxlength'=>10)); ?>

<!--<div class="form-group">
<label for="MyContacts_bithday" class="control-label col-lg-2">Дата рождения</label>
    <div class="col-lg-10">-->


    <?php $this->widget('bootstrap.widgets.BsDatePicker', array(
   //'name' => get_class($model).'_bithday',
   'model' => $model,
   'attribute' => 'bithday',
   'language' => 'ru',
   'options' => array(
       'showAnim' => 'fold',
       'changeYear'=>true
   ),
   'htmlOptions' => array(
       'style' => '',
       
       
   ),
));?>
         <!--  </div>    </div>-->
            <?php //echo $form->textFieldControlGroup($model,'bithday'); ?>

            <?php echo $form->dropDownListControlGroup($model,'prof_id',CHtml::listData(
                    Profession::model()->findAll(),'prof_id','profession'),
                    array('prompt'=>'Выберите профессию')); ?>
            <?php echo $form->error($model,'prof_id'); ?>
    

            <?php echo $form->dropDownListControlGroup($model,'zip_code',CHtml::listdata(
                    ZipCode::model()->findAll(),'zip_code','zip_code','city'),
                    array('empty' => 'Индекс...', 'class' => BSHtml::INPUT_SIZE_SM)
); ?>
       <?php echo $form->dropDownListControlGroup($model,'status_id',CHtml::listdata(
                    Status::model()->findAll(),'status_id','status'),
                    array('empty' => 'Статус', 'class' => BSHtml::INPUT_SIZE_SM)
); ?>

           
            <?php echo BSHtml::formActions(array(
    BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)),
)); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->