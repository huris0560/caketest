<div class="dUsers form">
<?php echo $this->Form->create('DUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit D User'); ?></legend>
	<?php
		echo $this->Form->input('user_cd');
		echo $this->Form->input('user_name1');
		echo $this->Form->input('user_name2');
		echo $this->Form->input('user_kana1');
		echo $this->Form->input('user_kana2');
		echo $this->Form->input('nick_name');
		echo $this->Form->input('circle_name');
		echo $this->Form->input('mail_addr');
		echo $this->Form->input('pass_word');
		echo $this->Form->input('birth_day_yy');
		echo $this->Form->input('birth_day_mm');
		echo $this->Form->input('birth_day_dd');
		echo $this->Form->input('regist_day');
		echo $this->Form->input('update_day');
		echo $this->Form->input('mmaga_flag');
		echo $this->Form->input('zipcode1_1');
		echo $this->Form->input('zipcode1_2');
		echo $this->Form->input('addr_1_1');
		echo $this->Form->input('addr_1_2');
		echo $this->Form->input('addr_1_3');
		echo $this->Form->input('addr_1_4');
		echo $this->Form->input('tel_1_1');
		echo $this->Form->input('tel_1_2');
		echo $this->Form->input('fax1');
		echo $this->Form->input('atena_name1_1');
		echo $this->Form->input('atena_name1_2');
		echo $this->Form->input('atena_kana1_1');
		echo $this->Form->input('atena_kana1_2');
		echo $this->Form->input('zipcode2_1');
		echo $this->Form->input('zipcode2_2');
		echo $this->Form->input('addr_2_1');
		echo $this->Form->input('addr_2_2');
		echo $this->Form->input('addr_2_3');
		echo $this->Form->input('addr_2_4');
		echo $this->Form->input('addr_2_5');
		echo $this->Form->input('tel_2_1');
		echo $this->Form->input('tel_2_2');
		echo $this->Form->input('fax2');
		echo $this->Form->input('atena_name2_1');
		echo $this->Form->input('atena_name2_2');
		echo $this->Form->input('atena_kana2_1');
		echo $this->Form->input('atena_kana2_2');
		echo $this->Form->input('inside_memo');
		echo $this->Form->input('user_age');
		echo $this->Form->input('user_sex');
		echo $this->Form->input('teishi_day');
		echo $this->Form->input('user_str');
		echo $this->Form->input('teishi_flag');
		echo $this->Form->input('cry_pass');
		echo $this->Form->input('ucd_guest');
		echo $this->Form->input('lcd_guest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DUser.user_cd')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DUser.user_cd')))); ?></li>
		<li><?php echo $this->Html->link(__('List D Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
