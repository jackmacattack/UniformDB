<div class="instruments form">
<?php echo $this->Form->create('Instrument'); ?>
	<fieldset>
		<legend><?php echo __('Add Instrument'); ?></legend>
	<?php
		echo $this->Form->inputs();
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Cancel'), array('action' => 'index')); ?></li>
	</ul>
</div>
