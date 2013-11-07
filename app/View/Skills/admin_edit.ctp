<div class="skills form">
<?php echo $this->Form->create('Skill'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Skill'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('skillcategory_id');
		echo $this->Form->input('skillname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Skill.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Skill.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Skillcategories'), array('controller' => 'skillcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skillcategory'), array('controller' => 'skillcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('controller' => 'employeeskills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeskill'), array('controller' => 'employeeskills', 'action' => 'add')); ?> </li>
	</ul>
</div>
