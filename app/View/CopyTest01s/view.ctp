<div class="copyTest01s view">
<h2><?php echo __('Copy Test01'); ?></h2>
	<dl>
		<dt><?php echo __('TesttestNo'); ?></dt>
		<dd>
			<?php echo h($copyTest01['CopyTest01']['testtestNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestName'); ?></dt>
		<dd>
			<?php echo h($copyTest01['CopyTest01']['testName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestDate'); ?></dt>
		<dd>
			<?php echo h($copyTest01['CopyTest01']['testDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestComment'); ?></dt>
		<dd>
			<?php echo h($copyTest01['CopyTest01']['testComment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Copy Test01'), array('action' => 'edit', $copyTest01['CopyTest01']['testtestNo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Copy Test01'), array('action' => 'delete', $copyTest01['CopyTest01']['testtestNo']), array('confirm' => __('Are you sure you want to delete # %s?', $copyTest01['CopyTest01']['testtestNo']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Copy Test01s'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy Test01'), array('action' => 'add')); ?> </li>
	</ul>
</div>
