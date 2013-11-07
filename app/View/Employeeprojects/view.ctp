<div class="employeeprojects view">
<h2><?php echo __('Employeeproject'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeproject['Employeeproject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeproject['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeeproject['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeproject['Project']['title'], array('controller' => 'projects', 'action' => 'view', $employeeproject['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employeeproject['Employeeproject']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employeeproject['Employeeproject']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employeeproject'), array('action' => 'edit', $employeeproject['Employeeproject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employeeproject'), array('action' => 'delete', $employeeproject['Employeeproject']['id']), null, __('Are you sure you want to delete # %s?', $employeeproject['Employeeproject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeprojects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeproject'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
