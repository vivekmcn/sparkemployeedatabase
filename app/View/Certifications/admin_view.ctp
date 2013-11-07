<div class="certifications view">
<h2><?php echo __('Certification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($certification['Certification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certification Name'); ?></dt>
		<dd>
			<?php echo h($certification['Certification']['certification_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($certification['Certification']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($certification['Certification']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Certification'), array('action' => 'edit', $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Certification'), array('action' => 'delete', $certification['Certification']['id']), null, __('Are you sure you want to delete # %s?', $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Certifications'), array('controller' => 'employee_certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Certification'), array('controller' => 'employee_certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employee Certifications'); ?></h3>
	<?php if (!empty($certification['EmployeeCertification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Certification Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($certification['EmployeeCertification'] as $employeeCertification): ?>
		<tr>
			<td><?php echo $employeeCertification['id']; ?></td>
			<td><?php echo $employeeCertification['employee_id']; ?></td>
			<td><?php echo $employeeCertification['certification_id']; ?></td>
			<td><?php echo $employeeCertification['created']; ?></td>
			<td><?php echo $employeeCertification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employee_certifications', 'action' => 'view', $employeeCertification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employee_certifications', 'action' => 'edit', $employeeCertification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employee_certifications', 'action' => 'delete', $employeeCertification['id']), null, __('Are you sure you want to delete # %s?', $employeeCertification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee Certification'), array('controller' => 'employee_certifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
