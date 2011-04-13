<div class="movies form">
	<?php echo $this->Form->create('Movie');
		echo $this->Form->inputs(array('title', 'genre', 'rating', 'format', 'length'));
		echo $this->Form->end(__('Edit',true)); ?>
</div>
<div class="actions">
	<h3><?php __('Actions') ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Movies',true), array('action' => 'index'));?></li>
	</ul>
</div>