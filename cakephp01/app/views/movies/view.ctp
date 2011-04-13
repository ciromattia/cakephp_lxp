<div class="movies view">
<h2><?php __('Movie')?></h2>
	<dl>
		<dt><?php __('Title')?></dt>
		<dd><?php echo $movie['Movie']['title']; ?></dd>
		<dt><?php __('Genre')?></dt>
		<dd><?php echo $movie['Movie']['genre']; ?></dd>
		<dt><?php __('Rating')?></dt>
		<dd><?php echo $movie['Movie']['rating']; ?></dd>
		<dt><?php __('Format')?></dt>
		<dd><?php echo $movie['Movie']['format']; ?></dd>
		<dt><?php __('Length')?></dt>
		<dd><?php echo $movie['Movie']['length']; ?></dd>
		<dt><?php __('Created')?></dt>
		<dd><?php echo $movie['Movie']['created']; ?></dd>
		<dt><?php __('Modified')?></dt>
		<dd><?php echo $movie['Movie']['modified']; ?></dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions')?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie',true), array('action' => 'edit', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Movie',true), array('action' => 'delete', $movie['Movie']['id']), null,
			sprintf(__('Are you sure you want to delete # %s?',true), $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies',true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie',true), array('action' => 'add')); ?> </li>
	</ul>
</div>