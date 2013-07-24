<div class="persons view">
<h2><?php  echo __('Person'); ?></h2>
	<dl>
		<?php
			foreach (array_keys($person['Person']) as $field)
			{
				echo '<dt>' . __($field) . '</dt>';
				echo '<dd>';
				echo h($person['Person'][$field]) . '&nbsp';
				echo '</dd>';
			}
		?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Persons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
	</ul>
</div>
