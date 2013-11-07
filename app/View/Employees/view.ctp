<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current Position'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['current_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employeeposition'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Employeeposition']['id'], array('controller' => 'employeepositions', 'action' => 'view', $employee['Employeeposition']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employeequalification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Employeequalification']['id'], array('controller' => 'employeequalifications', 'action' => 'view', $employee['Employeequalification']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeepositions'), array('controller' => 'employeepositions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeposition'), array('controller' => 'employeepositions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeequalifications'), array('controller' => 'employeequalifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeequalification'), array('controller' => 'employeequalifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Certifications'), array('controller' => 'employee_certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Certification'), array('controller' => 'employee_certifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeprojects'), array('controller' => 'employeeprojects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeproject'), array('controller' => 'employeeprojects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('controller' => 'employeeskills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeskill'), array('controller' => 'employeeskills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employee Certifications'); ?></h3>
	<?php if (!empty($employee['EmployeeCertification'])): ?>
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
		foreach ($employee['EmployeeCertification'] as $employeeCertification): ?>
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
<div class="related">
	<h3><?php echo __('Related Employeeprojects'); ?></h3>
	<?php if (!empty($employee['Employeeproject'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['Employeeproject'] as $employeeproject): ?>
		<tr>
			<td><?php echo $employeeproject['id']; ?></td>
			<td><?php echo $employeeproject['employee_id']; ?></td>
			<td><?php echo $employeeproject['project_id']; ?></td>
			<td><?php echo $employeeproject['created']; ?></td>
			<td><?php echo $employeeproject['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employeeprojects', 'action' => 'view', $employeeproject['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employeeprojects', 'action' => 'edit', $employeeproject['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employeeprojects', 'action' => 'delete', $employeeproject['id']), null, __('Are you sure you want to delete # %s?', $employeeproject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employeeproject'), array('controller' => 'employeeprojects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Employeeskills'); ?></h3>
	<?php if (!empty($employee['Employeeskill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Skill Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['Employeeskill'] as $employeeskill): ?>
		<tr>
			<td><?php echo $employeeskill['id']; ?></td>
			<td><?php echo $employeeskill['skill_id']; ?></td>
			<td><?php echo $employeeskill['employee_id']; ?></td>
			<td><?php echo $employeeskill['created']; ?></td>
			<td><?php echo $employeeskill['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employeeskills', 'action' => 'view', $employeeskill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employeeskills', 'action' => 'edit', $employeeskill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employeeskills', 'action' => 'delete', $employeeskill['id']), null, __('Are you sure you want to delete # %s?', $employeeskill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employeeskill'), array('controller' => 'employeeskills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
