<div class="projects view">
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($project['Project']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($project['Project']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeprojects'), array('controller' => 'employeeprojects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeproject'), array('controller' => 'employeeprojects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employeeprojects'); ?></h3>
	<?php if (!empty($project['Employeeproject'])): ?>
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
		foreach ($project['Employeeproject'] as $employeeproject): ?>
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
