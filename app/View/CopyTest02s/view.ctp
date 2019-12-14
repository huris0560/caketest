<div class="copyTest02s view">
<h2><?php echo __('Copy Test02'); ?></h2>
	<dl>
		<dt><?php echo __('TestNo'); ?></dt>
		<dd>
			<?php echo h($copyTest02['CopyTest02']['testNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestName'); ?></dt>
		<dd>
			<?php echo h($copyTest02['CopyTest02']['testName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestDate'); ?></dt>
		<dd>
			<?php echo h($copyTest02['CopyTest02']['testDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestComment'); ?></dt>
		<dd>
			<?php echo h($copyTest02['CopyTest02']['testComment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Copy Test02'), array('action' => 'edit', $copyTest02['CopyTest02']['testNo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Copy Test02'), array('action' => 'delete', $copyTest02['CopyTest02']['testNo']), array('confirm' => __('Are you sure you want to delete # %s?', $copyTest02['CopyTest02']['testNo']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Copy Test02s'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy Test02'), array('action' => 'add')); ?> </li>
	</ul>
</div>
