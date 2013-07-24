<div class="instruments view">
<h2><?php  echo __('Instrument'); ?></h2>
	<dl>
		<?php
			foreach (array_keys($instrument['Instrument']) as $field)
			{
				echo '<dt>' . __($field) . '</dt>';
				echo '<dd>';
				echo h($instrument['Instrument'][$field]) . '&nbsp';
				echo '</dd>';
			}
		?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instrument'), array('action' => 'edit', $instrument['Instrument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instrument'), array('action' => 'delete', $instrument['Instrument']['id']), null, __('Are you sure you want to delete # %s?', $instrument['Instrument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('action' => 'add')); ?> </li>
	</ul>
</div>
