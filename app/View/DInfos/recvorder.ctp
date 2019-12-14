<div class="dInfos view">
<h2><?php echo __('D Info'); ?></h2>
	<dl>
		<dt><?php echo __('Info Cd'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['info_cd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info Title'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['info_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info Detail'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['info_detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View Day'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['view_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View Flag'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['view_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regist Day'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['regist_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Day'); ?></dt>
		<dd>
			<?php echo h($dInfo['DInfo']['update_day']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit D Info'), array('action' => 'edit', $dInfo['DInfo']['info_cd'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete D Info'), array('action' => 'delete', $dInfo['DInfo']['info_cd']), array('confirm' => __('Are you sure you want to delete # %s?', $dInfo['DInfo']['info_cd']))); ?> </li>
		<li><?php echo $this->Html->link(__('List D Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New D Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
