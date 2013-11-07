<div class="skills view">
<h2><?php echo __('Skill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skillcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skill['Skillcategory']['id'], array('controller' => 'skillcategories', 'action' => 'view', $skill['Skillcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skillname'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['skillname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skillcategories'), array('controller' => 'skillcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skillcategory'), array('controller' => 'skillcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('controller' => 'employeeskills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeskill'), array('controller' => 'employeeskills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employeeskills'); ?></h3>
	<?php if (!empty($skill['Employeeskill'])): ?>
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
		foreach ($skill['Employeeskill'] as $employeeskill): ?>
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
