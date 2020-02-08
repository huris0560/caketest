<div class="dCreditProcs form">
<?php echo $this->Form->create('DCreditProc'); ?>
	<fieldset>
		<legend><?php echo __('Add D Credit Proc'); ?></legend>
	<?php
		echo $this->Form->input('proc_kbn');
		echo $this->Form->input('job_cd');
		echo $this->Form->input('kokyaku_id');
		echo $this->Form->input('session_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('order_id');
		echo $this->Form->input('access_id');
		echo $this->Form->input('access_pass');
		echo $this->Form->input('method');
		echo $this->Form->input('paytimes');
		echo $this->Form->input('approve');
		echo $this->Form->input('tran_id');
		echo $this->Form->input('check_string');
		echo $this->Form->input('client_field1');
		echo $this->Form->input('client_field2');
		echo $this->Form->input('client_field3');
		echo $this->Form->input('err_code');
		echo $this->Form->input('err_info');
		echo $this->Form->input('err_text');
		echo $this->Form->input('status');
		echo $this->Form->input('new_flag');
		echo $this->Form->input('proc_day');
		echo $this->Form->input('pay_flg');
		echo $this->Form->input('cust_id');
		echo $this->Form->input('bk_code');
		echo $this->Form->input('conf_no');
		echo $this->Form->input('encrypt_receipt_no');
		echo $this->Form->input('payment_term_day');
		echo $this->Form->input('payment_day');
		echo $this->Form->input('user_addr_flag');
		echo $this->Form->input('haiso_time');
		echo $this->Form->input('hinmoku');
		echo $this->Form->input('item_memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List D Credit Procs'), array('action' => 'index')); ?></li>
	</ul>
</div>
