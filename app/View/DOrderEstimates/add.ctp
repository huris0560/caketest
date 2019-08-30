<div class="dOrderEstimates form">
<?php echo $this->Form->create('DOrderEstimate'); ?>
	<fieldset>
		<legend><?php echo __('Add D Order Estimate'); ?></legend>
	<?php
		echo $this->Form->input('estimate_no');
		echo $this->Form->input('user_cd');
		echo $this->Form->input('order_cd');
		echo $this->Form->input('pack_price');
		echo $this->Form->input('asobi_kasan');
		echo $this->Form->input('kuchie_kasan');
		echo $this->Form->input('account_price');
		echo $this->Form->input('sum_price');
		echo $this->Form->input('hon_size');
		echo $this->Form->input('hon_busu');
		echo $this->Form->input('tozi');
		echo $this->Form->input('seihon');
		echo $this->Form->input('hon_page');
		echo $this->Form->input('hyosi_insatu');
		echo $this->Form->input('hyosi_yosi');
		echo $this->Form->input('honbun_insatu');
		echo $this->Form->input('honbun_yosi');
		echo $this->Form->input('asobi');
		echo $this->Form->input('asobi_kami');
		echo $this->Form->input('kuchie_insatu');
		echo $this->Form->input('kuchie_yosi');
		echo $this->Form->input('kuchie_sonyu_mai');
		echo $this->Form->input('kuchie_sonyu_ba');
		echo $this->Form->input('kuchie_sonyu_ba_etc');
		echo $this->Form->input('pack_name');
		echo $this->Form->input('delivery_method_name');
		echo $this->Form->input('delivery_date');
		echo $this->Form->input('event_name');
		echo $this->Form->input('hyosi_deadline');
		echo $this->Form->input('hyosi_discount_deadline');
		echo $this->Form->input('hyosi_express_deadline');
		echo $this->Form->input('honbun_deadline');
		echo $this->Form->input('honbun_discount_deadline');
		echo $this->Form->input('honbun_express_deadline');
		echo $this->Form->input('kuchie_deadline');
		echo $this->Form->input('kuchie_discount_deadline');
		echo $this->Form->input('kuchie_express_deadline');
		echo $this->Form->input('pack_discount_ratio');
		echo $this->Form->input('pack_discount_price');
		echo $this->Form->input('pack_express_ratio');
		echo $this->Form->input('pack_express_price');
		echo $this->Form->input('hyosi_discount_ratio');
		echo $this->Form->input('hyosi_discount_price');
		echo $this->Form->input('hyosi_express_ratio');
		echo $this->Form->input('hyosi_express_price');
		echo $this->Form->input('honbun_discount_ratio');
		echo $this->Form->input('honbun_discount_price');
		echo $this->Form->input('honbun_express_ratio');
		echo $this->Form->input('honbun_express_price');
		echo $this->Form->input('kuchie_discount_ratio');
		echo $this->Form->input('kuchie_discount_price');
		echo $this->Form->input('kuchie_express_ratio');
		echo $this->Form->input('kuchie_express_price');
		echo $this->Form->input('put_foil_discount_ratio');
		echo $this->Form->input('put_foil_discount_price');
		echo $this->Form->input('put_foil_express_ratio');
		echo $this->Form->input('put_foil_express_price');
		echo $this->Form->input('other_option_price');
		echo $this->Form->input('other_option_detail');
		echo $this->Form->input('price_without_tax');
		echo $this->Form->input('external_tax');
		echo $this->Form->input('regist_timestamp');
		echo $this->Form->input('update_timestamp');
		echo $this->Form->input('order_timestamp');
		echo $this->Form->input('admin_nyuko_status');
		echo $this->Form->input('admin_label_color');
		echo $this->Form->input('admin_nyuko_memo');
		echo $this->Form->input('keizoku_flag');
		echo $this->Form->input('hyosi_complete_status');
		echo $this->Form->input('hyosi_complete_timestamp');
		echo $this->Form->input('honbun_complete_status');
		echo $this->Form->input('honbun_complete_timestamp');
		echo $this->Form->input('kuchie_complete_status');
		echo $this->Form->input('kuchie_complete_timestamp');
		echo $this->Form->input('hyosi_limit_time');
		echo $this->Form->input('hyosi_discount_limit_time');
		echo $this->Form->input('hyosi_express_limit_time');
		echo $this->Form->input('honbun_limit_time');
		echo $this->Form->input('honbun_discount_limit_time');
		echo $this->Form->input('honbun_express_limit_time');
		echo $this->Form->input('kuchie_limit_time');
		echo $this->Form->input('kuchie_discount_limit_time');
		echo $this->Form->input('kuchie_express_limit_time');
		echo $this->Form->input('book_title');
		echo $this->Form->input('reprint_flag');
		echo $this->Form->input('delivery_installments');
		echo $this->Form->input('delivery_space_no');
		echo $this->Form->input('delivery_circle_name');
		echo $this->Form->input('customer_circle_name');
		echo $this->Form->input('expiration_date');
		echo $this->Form->input('tehai_flag');
		echo $this->Form->input('tehai_kanryo_day');
		echo $this->Form->input('before_sum_price');
		echo $this->Form->input('ul_send_flag_hyosi');
		echo $this->Form->input('ul_send_flag_honbun');
		echo $this->Form->input('ul_send_flag_kuchie');
		echo $this->Form->input('pack_cover_price');
		echo $this->Form->input('pack_body_price');
		echo $this->Form->input('hyosi_download_status');
		echo $this->Form->input('hyosi_download_timestamp');
		echo $this->Form->input('honbun_download_status');
		echo $this->Form->input('honbun_download_timestamp');
		echo $this->Form->input('kuchie_download_status');
		echo $this->Form->input('kuchie_download_timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List D Order Estimates'), array('action' => 'index')); ?></li>
	</ul>
</div>
