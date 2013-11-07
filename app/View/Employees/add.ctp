<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<div class="employees form">
<?php echo $this->Form->create('Employee',array( 'type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('email');
                echo $this->Form->input('image',array('type' => 'file'));
		echo $this->Form->input('dateofbirth',array('id' => 'datepicker','type' => 'text'));
                echo $this->Form->input('phone_number');
                echo $this->Form->input('employeeposition_id');
		echo $this->Form->input('employeequalification_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#datepicker').datepicker();
    })
</script>