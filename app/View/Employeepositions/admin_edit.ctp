<div class="employeepositions form">
<?php echo $this->Form->create('Employeeposition'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Employeeposition'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('position_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employeeposition.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employeeposition.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employeepositions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
