<div class="skillcategories index">
	<h2><?php echo __('Skillcategories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($skillcategories as $skillcategory): ?>
	<tr>
		<td><?php echo h($skillcategory['Skillcategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($skillcategory['Skillcategory']['category_name']); ?>&nbsp;</td>
		<td><?php echo h($skillcategory['Skillcategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($skillcategory['Skillcategory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $skillcategory['Skillcategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skillcategory['Skillcategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skillcategory['Skillcategory']['id']), null, __('Are you sure you want to delete # %s?', $skillcategory['Skillcategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Skillcategory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
