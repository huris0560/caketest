<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('pass_word');
		echo $this->Form->input('name');
		echo $this->Form->input('name_kana');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name_kana');
		echo $this->Form->input('last_name_kana');
		echo $this->Form->input('sex');
		echo $this->Form->input('circle_name');
		echo $this->Form->input('mail_addr1');
		echo $this->Form->input('mail_addr2');
		echo $this->Form->input('mmaga_flag');
		echo $this->Form->input('Tel_m1');
		echo $this->Form->input('Tel_m2');
		echo $this->Form->input('fax1');
		echo $this->Form->input('birth_day');
		echo $this->Form->input('regist_day');
		echo $this->Form->input('update_day');
		echo $this->Form->input('zipcode1_1');
		echo $this->Form->input('zipcode1_2');
		echo $this->Form->input('addr_1_1');
		echo $this->Form->input('addr_1_2');
		echo $this->Form->input('addr_1_3');
		echo $this->Form->input('addr_1_4');
		echo $this->Form->input('atena_name1');
		echo $this->Form->input('Tel_1');
		echo $this->Form->input('zipcode2_1');
		echo $this->Form->input('zipcode2_2');
		echo $this->Form->input('addr_２_1');
		echo $this->Form->input('addr_２_2');
		echo $this->Form->input('addr_２_3');
		echo $this->Form->input('addr_２_4');
		echo $this->Form->input('atena_name2');
		echo $this->Form->input('Tel_2');
		echo $this->Form->input('zipcode3_1');
		echo $this->Form->input('zipcode3_2');
		echo $this->Form->input('addr_3_1');
		echo $this->Form->input('addr_3_2');
		echo $this->Form->input('addr_3_3');
		echo $this->Form->input('addr_3_4');
		echo $this->Form->input('atena_name3');
		echo $this->Form->input('Tel_3');
		echo $this->Form->input('user_age');
		echo $this->Form->input('teishi_day');
		echo $this->Form->input('teishi_flag');
		echo $this->Form->input('user_str');
		echo $this->Form->input('myaon_point');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
	</ul>
</div>
