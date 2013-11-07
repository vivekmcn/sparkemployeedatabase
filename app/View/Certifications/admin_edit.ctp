<div class="certifications form">
<?php echo $this->Form->create('Certification'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Certification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('certification_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Certification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Certification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employee Certifications'), array('controller' => 'employee_certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Certification'), array('controller' => 'employee_certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
