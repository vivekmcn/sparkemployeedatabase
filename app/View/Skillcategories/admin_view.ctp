<div class="skillcategories view">
<h2><?php echo __('Skillcategory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($skillcategory['Skillcategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($skillcategory['Skillcategory']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($skillcategory['Skillcategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($skillcategory['Skillcategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skillcategory'), array('action' => 'edit', $skillcategory['Skillcategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skillcategory'), array('action' => 'delete', $skillcategory['Skillcategory']['id']), null, __('Are you sure you want to delete # %s?', $skillcategory['Skillcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skillcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skillcategory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Skills'); ?></h3>
	<?php if (!empty($skillcategory['Skill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Skillcategory Id'); ?></th>
		<th><?php echo __('Skillname'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($skillcategory['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['id']; ?></td>
			<td><?php echo $skill['skillcategory_id']; ?></td>
			<td><?php echo $skill['skillname']; ?></td>
			<td><?php echo $skill['created']; ?></td>
			<td><?php echo $skill['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
