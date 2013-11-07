<div class="employees form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('name');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>