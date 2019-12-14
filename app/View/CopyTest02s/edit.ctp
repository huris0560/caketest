<div class="copyTest02s form">
<?php echo $this->Form->create('CopyTest02'); ?>
	<fieldset>
		<legend><?php echo __('Edit Copy Test02'); ?></legend>
	<?php
		echo $this->Form->input('testNo');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CopyTest02.testNo')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CopyTest02.testNo')))); ?></li>
		<li><?php echo $this->Html->link(__('List Copy Test02s'), array('action' => 'index')); ?></li>
	</ul>
</div>
