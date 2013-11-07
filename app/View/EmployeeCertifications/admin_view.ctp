<div class="employeeCertifications view">
<h2><?php echo __('Employee Certification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeCertification['EmployeeCertification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeCertification['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeeCertification['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeCertification['Certification']['id'], array('controller' => 'certifications', 'action' => 'view', $employeeCertification['Certification']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employeeCertification['EmployeeCertification']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employeeCertification['EmployeeCertification']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Certification'), array('action' => 'edit', $employeeCertification['EmployeeCertification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Certification'), array('action' => 'delete', $employeeCertification['EmployeeCertification']['id']), null, __('Are you sure you want to delete # %s?', $employeeCertification['EmployeeCertification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Certifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Certification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification'), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
