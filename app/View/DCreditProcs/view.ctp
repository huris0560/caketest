<div class="dCreditProcs view">
<h2><?php echo __('D Credit Proc'); ?></h2>
	<dl>
		<dt><?php echo __('Proc No'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['proc_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proc Kbn'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['proc_kbn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Cd'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['job_cd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kokyaku Id'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['kokyaku_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Session Id'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['session_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Id'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['order_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access Id'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['access_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access Pass'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['access_pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Method'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paytimes'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['paytimes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approve'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['approve']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tran Id'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['tran_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check String'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['check_string']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Field1'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['client_field1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Field2'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['client_field2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Field3'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['client_field3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Err Code'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['err_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Err Info'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['err_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Err Text'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['err_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Flag'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['new_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proc Day'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['proc_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Flg'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['pay_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Id'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['cust_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bk Code'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['bk_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conf No'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['conf_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encrypt Receipt No'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['encrypt_receipt_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Term Day'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['payment_term_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Day'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['payment_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Addr Flag'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['user_addr_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Haiso Time'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['haiso_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hinmoku'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['hinmoku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Memo'); ?></dt>
		<dd>
			<?php echo h($dCreditProc['DCreditProc']['item_memo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit D Credit Proc'), array('action' => 'edit', $dCreditProc['DCreditProc']['proc_no'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete D Credit Proc'), array('action' => 'delete', $dCreditProc['DCreditProc']['proc_no']), array('confirm' => __('Are you sure you want to delete # %s?', $dCreditProc['DCreditProc']['proc_no']))); ?> </li>
		<li><?php echo $this->Html->link(__('List D Credit Procs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New D Credit Proc'), array('action' => 'add')); ?> </li>
	</ul>
</div>
