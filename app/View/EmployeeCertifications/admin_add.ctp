<div class="employeeCertifications form">
<?php echo $this->Form->create('EmployeeCertification'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Employee Certification'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('certification_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employee Certifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification'), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
