<div class="dInfos form">
<?php echo $this->Form->create('DInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit D Info'); ?></legend>
	<?php
		echo $this->Form->input('info_cd');
		echo $this->Form->input('info_title');
		echo $this->Form->input('info_detail');
		echo $this->Form->input('view_day');
		echo $this->Form->input('view_flag');
		echo $this->Form->input('regist_day');
		echo $this->Form->input('update_day');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DInfo.info_cd')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DInfo.info_cd')))); ?></li>
		<li><?php echo $this->Html->link(__('List D Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
