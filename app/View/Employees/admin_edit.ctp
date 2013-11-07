<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Employee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('image');
		echo $this->Form->input('email');
		echo $this->Form->input('current_position');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('employeeposition_id');
		echo $this->Form->input('employeequalification_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employeepositions'), array('controller' => 'employeepositions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeposition'), array('controller' => 'employeepositions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeequalifications'), array('controller' => 'employeequalifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeequalification'), array('controller' => 'employeequalifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Certifications'), array('controller' => 'employee_certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Certification'), array('controller' => 'employee_certifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeprojects'), array('controller' => 'employeeprojects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeproject'), array('controller' => 'employeeprojects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('controller' => 'employeeskills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeskill'), array('controller' => 'employeeskills', 'action' => 'add')); ?> </li>
	</ul>
</div>
