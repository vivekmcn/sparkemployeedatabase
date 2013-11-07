<div class="employeeskills form">
<?php echo $this->Form->create('Employeeskill'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Employeeskill'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('skill_id');
		echo $this->Form->input('employee_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employeeskill.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employeeskill.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
