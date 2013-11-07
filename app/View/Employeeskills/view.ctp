<div class="employeeskills view">
<h2><?php echo __('Employeeskill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeskill['Employeeskill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skill'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeskill['Skill']['id'], array('controller' => 'skills', 'action' => 'view', $employeeskill['Skill']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeskill['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeeskill['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employeeskill['Employeeskill']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employeeskill['Employeeskill']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employeeskill'), array('action' => 'edit', $employeeskill['Employeeskill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employeeskill'), array('action' => 'delete', $employeeskill['Employeeskill']['id']), null, __('Are you sure you want to delete # %s?', $employeeskill['Employeeskill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeskill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
