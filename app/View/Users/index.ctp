<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pass_word'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('circle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_addr1'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_addr2'); ?></th>
			<th><?php echo $this->Paginator->sort('mmaga_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('Tel_m1'); ?></th>
			<th><?php echo $this->Paginator->sort('Tel_m2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax1'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_day'); ?></th>
			<th><?php echo $this->Paginator->sort('regist_day'); ?></th>
			<th><?php echo $this->Paginator->sort('update_day'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_1'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_3'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_1_4'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name1'); ?></th>
			<th><?php echo $this->Paginator->sort('Tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode2_1'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode2_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_２_1'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_２_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_２_3'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_２_4'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name2'); ?></th>
			<th><?php echo $this->Paginator->sort('Tel_2'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode3_1'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode3_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_3_1'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_3_2'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_3_3'); ?></th>
			<th><?php echo $this->Paginator->sort('addr_3_4'); ?></th>
			<th><?php echo $this->Paginator->sort('atena_name3'); ?></th>
			<th><?php echo $this->Paginator->sort('Tel_3'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('teishi_day'); ?></th>
			<th><?php echo $this->Paginator->sort('teishi_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('remark'); ?></th>
			<th><?php echo $this->Paginator->sort('myaon_point'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['pass_word']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name_kana']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['sex']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['circle_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mail_addr1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mail_addr2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mmaga_flag']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Tel_m1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Tel_m2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fax1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['birth_day']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['regist_day']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['update_day']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode1_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode1_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_1_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_1_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_1_3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_1_4']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['atena_name1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Tel_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode2_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode2_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_２_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_２_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_２_3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_２_4']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['atena_name2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Tel_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode3_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode3_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_3_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_3_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_3_3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addr_3_4']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['atena_name3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Tel_3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['teishi_day']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['teishi_flag']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['remark']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['myaon_point']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
