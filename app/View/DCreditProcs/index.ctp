<div class="dCreditProcs index">
	<h2><?php echo __('D Credit Procs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('proc_no'); ?></th>
			<th><?php echo $this->Paginator->sort('proc_kbn'); ?></th>
			<th><?php echo $this->Paginator->sort('job_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('kokyaku_id'); ?></th>
			<th><?php echo $this->Paginator->sort('session_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('access_id'); ?></th>
			<th><?php echo $this->Paginator->sort('access_pass'); ?></th>
			<th><?php echo $this->Paginator->sort('method'); ?></th>
			<th><?php echo $this->Paginator->sort('paytimes'); ?></th>
			<th><?php echo $this->Paginator->sort('approve'); ?></th>
			<th><?php echo $this->Paginator->sort('tran_id'); ?></th>
			<th><?php echo $this->Paginator->sort('check_string'); ?></th>
			<th><?php echo $this->Paginator->sort('client_field1'); ?></th>
			<th><?php echo $this->Paginator->sort('client_field2'); ?></th>
			<th><?php echo $this->Paginator->sort('client_field3'); ?></th>
			<th><?php echo $this->Paginator->sort('err_code'); ?></th>
			<th><?php echo $this->Paginator->sort('err_info'); ?></th>
			<th><?php echo $this->Paginator->sort('err_text'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('new_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('proc_day'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bk_code'); ?></th>
			<th><?php echo $this->Paginator->sort('conf_no'); ?></th>
			<th><?php echo $this->Paginator->sort('encrypt_receipt_no'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_term_day'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_day'); ?></th>
			<th><?php echo $this->Paginator->sort('user_addr_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('haiso_time'); ?></th>
			<th><?php echo $this->Paginator->sort('hinmoku'); ?></th>
			<th><?php echo $this->Paginator->sort('item_memo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dCreditProcs as $dCreditProc): ?>
	<tr>
		<td><?php echo h($dCreditProc['DCreditProc']['proc_no']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['proc_kbn']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['job_cd']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['kokyaku_id']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['session_id']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['amount']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['order_id']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['access_id']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['access_pass']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['method']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['paytimes']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['approve']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['tran_id']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['check_string']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['client_field1']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['client_field2']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['client_field3']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['err_code']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['err_info']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['err_text']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['status']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['new_flag']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['proc_day']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['pay_flg']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['cust_id']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['bk_code']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['conf_no']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['encrypt_receipt_no']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['payment_term_day']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['payment_day']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['user_addr_flag']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['haiso_time']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['hinmoku']); ?>&nbsp;</td>
		<td><?php echo h($dCreditProc['DCreditProc']['item_memo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dCreditProc['DCreditProc']['proc_no'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dCreditProc['DCreditProc']['proc_no'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dCreditProc['DCreditProc']['proc_no']), array('confirm' => __('Are you sure you want to delete # %s?', $dCreditProc['DCreditProc']['proc_no']))); ?>
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
		<li><?php echo $this->Html->link(__('New D Credit Proc'), array('action' => 'add')); ?></li>
	</ul>
</div>
