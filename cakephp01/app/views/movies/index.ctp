<div class="movies index">
	<h2><?php __('Movies') ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Title')?></th>
			<th><?php __('Genre')?></th>
			<th><?php __('Rating')?></th>
			<th><?php __('Format')?></th>
			<th><?php __('Length')?></th>
			<th class="actions"><?php __('Actions')?></th>
		</tr>
	<?php foreach ($movies as $movie): ?>
	<tr>
		<td><?php echo $movie['Movie']['title']; ?>&nbsp;</td>
		<td><?php echo $movie['Movie']['genre']; ?>&nbsp;</td>
		<td><?php echo $movie['Movie']['rating']; ?>&nbsp;</td>
		<td><?php echo $movie['Movie']['format']; ?>&nbsp;</td>
		<td><?php echo $movie['Movie']['length']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View',true), array('action' => 'view', $movie['Movie']['id'])); ?>
			<?php echo $this->Html->link(__('Edit',true), array('action' => 'edit', $movie['Movie']['id'])); ?>
			<?php echo $this->Html->link(__('Delete',true), array('action' => 'delete', $movie['Movie']['id']),
				null, sprintf(__('Are you sure you want to delete %s?',true), $movie['Movie']['title'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php __('Actions')?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Movie',true), array('action' => 'add')); ?></li>
	</ul>
</div>
