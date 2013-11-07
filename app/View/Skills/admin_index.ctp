<div class="skills index">
	<h2><?php echo __('Skills'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('skillcategory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('skillname'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($skills as $skill): ?>
	<tr>
		<td><?php echo h($skill['Skill']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($skill['Skillcategory']['id'], array('controller' => 'skillcategories', 'action' => 'view', $skill['Skillcategory']['id'])); ?>
		</td>
		<td><?php echo h($skill['Skill']['skillname']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['created']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $skill['Skill']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skill['Skill']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Skillcategories'), array('controller' => 'skillcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skillcategory'), array('controller' => 'skillcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeeskills'), array('controller' => 'employeeskills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeeskill'), array('controller' => 'employeeskills', 'action' => 'add')); ?> </li>
	</ul>
</div>
