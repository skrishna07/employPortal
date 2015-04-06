<?php
/* @var $this EmpRegistrationController */
/* @var $data EmpRegistration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emp_id), array('view', 'id'=>$data->emp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_username')); ?>:</b>
	<?php echo CHtml::encode($data->emp_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_password')); ?>:</b>
	<?php echo CHtml::encode($data->emp_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->emp_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->emp_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_email')); ?>:</b>
	<?php echo CHtml::encode($data->emp_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_mobno')); ?>:</b>
	<?php echo CHtml::encode($data->emp_mobno); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_gender')); ?>:</b>
	<?php echo CHtml::encode($data->emp_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_father_hus_name')); ?>:</b>
	<?php echo CHtml::encode($data->emp_father_hus_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_dob')); ?>:</b>
	<?php echo CHtml::encode($data->emp_dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_image')); ?>:</b>
	<?php echo CHtml::encode($data->emp_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_identityproof')); ?>:</b>
	<?php echo CHtml::encode($data->emp_identityproof); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_presentaddress')); ?>:</b>
	<?php echo CHtml::encode($data->emp_presentaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_permenentaddress')); ?>:</b>
	<?php echo CHtml::encode($data->emp_permenentaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_pancard')); ?>:</b>
	<?php echo CHtml::encode($data->emp_pancard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_passport')); ?>:</b>
	<?php echo CHtml::encode($data->emp_passport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_role')); ?>:</b>
	<?php echo CHtml::encode($data->emp_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdate')); ?>:</b>
	<?php echo CHtml::encode($data->createdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($data->updatedate); ?>
	<br />

	*/?>

</div>