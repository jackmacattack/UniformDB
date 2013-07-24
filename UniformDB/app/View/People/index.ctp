<div class="people index">
	<h2>
		<?php echo __('People'); ?>
	</h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<?php 
			foreach ($fields as $field)
			{
				echo '<th>' . $this->Paginator->sort($field) . '</th>';
			}
			?>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php
		foreach ($people as $person)
		{
			echo '<tr>';

			foreach ($person['Person'] as $val)
			{
				echo '<td>' . h($val) . '&nbsp' . '</td>';
					
			}

			echo '<td class="actions">';

			echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id']));
			echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id']));
			echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), null,
							__('Are you sure you want to delete # %s?', $person['Person']['id']));

			echo '</td>';

			echo '</tr>';
		}
		?>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
	</p>

	<div class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('Update Viewers'), array('action' => 'updateViewers')); ?>
		</li>
		<!-- <li><?php //echo $this->Html->link(__('Generate Sessions'), array('action' => 'generate_sessions')); ?></li> -->
	</ul>
</div>
