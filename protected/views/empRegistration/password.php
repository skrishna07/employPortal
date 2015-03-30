<?php $form=$this->beginWidget('CActiveForm', array(
         'id'=>'email-form',
           'enableClientValidation'=>true,
            ));
 echo "email";
          echo CHtml::textField('email');
          echo CHtml::submitButton('Send');
          $this->endWidget();
?>
