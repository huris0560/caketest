<div class="clients index">
	<h2><?php echo __('Clients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
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
			<th><?php echo $this->Paginator->sort('user_age'); ?></th>
			<th><?php echo $this->Paginator->sort('teishi_day'); ?></th>
			<th><?php echo $this->Paginator->sort('teishi_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('user_str'); ?></th>
			<th><?php echo $this->Paginator->sort('myaon_point'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['pass_word']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['name_kana']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['first_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['last_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['sex']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['circle_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['mail_addr1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['mail_addr2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['mmaga_flag']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Tel_m1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Tel_m2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['fax1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['birth_day']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['regist_day']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['update_day']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zipcode1_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zipcode1_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_1_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_1_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_1_3']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_1_4']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['atena_name1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Tel_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zipcode2_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zipcode2_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_２_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_２_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_２_3']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_２_4']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['atena_name2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Tel_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zipcode3_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zipcode3_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_3_1']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_3_2']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_3_3']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['addr_3_4']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['atena_name3']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Tel_3']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['user_age']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['teishi_day']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['teishi_flag']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['user_str']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['myaon_point']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['user_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['user_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['user_id']), array('confirm' => __('Are you sure you want to delete # %s?', $client['Client']['user_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
	</ul>
</div>
