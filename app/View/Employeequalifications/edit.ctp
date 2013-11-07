<div class="employeequalifications form">
<?php echo $this->Form->create('Employeequalification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employeequalification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('qualification_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employeequalification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employeequalification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employeequalifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
