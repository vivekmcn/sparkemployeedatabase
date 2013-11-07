<div class="employeeCertifications index">
	<h2><?php echo __('Employee Certifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('certification_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employeeCertifications as $employeeCertification): ?>
	<tr>
		<td><?php echo h($employeeCertification['EmployeeCertification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employeeCertification['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeeCertification['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employeeCertification['Certification']['id'], array('controller' => 'certifications', 'action' => 'view', $employeeCertification['Certification']['id'])); ?>
		</td>
		<td><?php echo h($employeeCertification['EmployeeCertification']['created']); ?>&nbsp;</td>
		<td><?php echo h($employeeCertification['EmployeeCertification']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeeCertification['EmployeeCertification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeeCertification['EmployeeCertification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeeCertification['EmployeeCertification']['id']), null, __('Are you sure you want to delete # %s?', $employeeCertification['EmployeeCertification']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employee Certification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification'), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
