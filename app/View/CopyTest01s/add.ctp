<div class="copyTest01s form">
<?php echo $this->Form->create('CopyTest01'); ?>
	<fieldset>
		<legend><?php echo __('Add Copy Test01'); ?></legend>
	<?php
		echo $this->Form->input('testName');
		echo $this->Form->input('testDate');
		echo $this->Form->input('testComment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Copy Test01s'), array('action' => 'index')); ?></li>
	</ul>
</div>
