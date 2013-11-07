<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Project'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employeeprojects'), array('controller' => 'employeeprojects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeproject'), array('controller' => 'employeeprojects', 'action' => 'add')); ?> </li>
	</ul>
</div>
