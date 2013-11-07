<div class="employeequalifications index">
	<h2><?php echo __('Employeequalifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employeequalifications as $employeequalification): ?>
	<tr>
		<td><?php echo h($employeequalification['Employeequalification']['id']); ?>&nbsp;</td>
		<td><?php echo h($employeequalification['Employeequalification']['qualification_name']); ?>&nbsp;</td>
		<td><?php echo h($employeequalification['Employeequalification']['created']); ?>&nbsp;</td>
		<td><?php echo h($employeequalification['Employeequalification']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeequalification['Employeequalification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeequalification['Employeequalification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeequalification['Employeequalification']['id']), null, __('Are you sure you want to delete # %s?', $employeequalification['Employeequalification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employeequalification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
