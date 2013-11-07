<div class="employeequalifications view">
<h2><?php echo __('Employeequalification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeequalification['Employeequalification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Name'); ?></dt>
		<dd>
			<?php echo h($employeequalification['Employeequalification']['qualification_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employeequalification['Employeequalification']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employeequalification['Employeequalification']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employeequalification'), array('action' => 'edit', $employeequalification['Employeequalification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employeequalification'), array('action' => 'delete', $employeequalification['Employeequalification']['id']), null, __('Are you sure you want to delete # %s?', $employeequalification['Employeequalification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeequalifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeequalification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($employeequalification['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fname'); ?></th>
		<th><?php echo __('Lname'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Current Position'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Employeeposition Id'); ?></th>
		<th><?php echo __('Employeequalification Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employeequalification['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['fname']; ?></td>
			<td><?php echo $employee['lname']; ?></td>
			<td><?php echo $employee['image']; ?></td>
			<td><?php echo $employee['email']; ?></td>
			<td><?php echo $employee['current_position']; ?></td>
			<td><?php echo $employee['phone_number']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td><?php echo $employee['employeeposition_id']; ?></td>
			<td><?php echo $employee['employeequalification_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
