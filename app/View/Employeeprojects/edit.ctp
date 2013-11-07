<div class="employeeprojects form">
<?php echo $this->Form->create('Employeeproject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employeeproject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('project_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employeeproject.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employeeproject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employeeprojects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
