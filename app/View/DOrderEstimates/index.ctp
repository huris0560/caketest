<div class="dOrderEstimates index">
	<h2><?php echo __('D Order Estimates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('order_estimate_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('estimate_no'); ?></th>
			<th><?php echo $this->Paginator->sort('user_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('order_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_price'); ?></th>
			<th><?php echo $this->Paginator->sort('asobi_kasan'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_kasan'); ?></th>
			<th><?php echo $this->Paginator->sort('account_price'); ?></th>
			<th><?php echo $this->Paginator->sort('sum_price'); ?></th>
			<th><?php echo $this->Paginator->sort('hon_size'); ?></th>
			<th><?php echo $this->Paginator->sort('hon_busu'); ?></th>
			<th><?php echo $this->Paginator->sort('tozi'); ?></th>
			<th><?php echo $this->Paginator->sort('seihon'); ?></th>
			<th><?php echo $this->Paginator->sort('hon_page'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_insatu'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_yosi'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_insatu'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_yosi'); ?></th>
			<th><?php echo $this->Paginator->sort('asobi'); ?></th>
			<th><?php echo $this->Paginator->sort('asobi_kami'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_insatu'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_yosi'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_sonyu_mai'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_sonyu_ba'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_sonyu_ba_etc'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_name'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_method_name'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_date'); ?></th>
			<th><?php echo $this->Paginator->sort('event_name'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_discount_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_express_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_discount_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_express_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_discount_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_express_deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_discount_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_discount_price'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_express_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_express_price'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_discount_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_discount_price'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_express_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_express_price'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_discount_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_discount_price'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_express_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_express_price'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_discount_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_discount_price'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_express_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_express_price'); ?></th>
			<th><?php echo $this->Paginator->sort('put_foil_discount_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('put_foil_discount_price'); ?></th>
			<th><?php echo $this->Paginator->sort('put_foil_express_ratio'); ?></th>
			<th><?php echo $this->Paginator->sort('put_foil_express_price'); ?></th>
			<th><?php echo $this->Paginator->sort('other_option_price'); ?></th>
			<th><?php echo $this->Paginator->sort('other_option_detail'); ?></th>
			<th><?php echo $this->Paginator->sort('price_without_tax'); ?></th>
			<th><?php echo $this->Paginator->sort('external_tax'); ?></th>
			<th><?php echo $this->Paginator->sort('regist_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('update_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('order_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_nyuko_status'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_label_color'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_nyuko_memo'); ?></th>
			<th><?php echo $this->Paginator->sort('keizoku_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_complete_status'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_complete_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_complete_status'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_complete_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_complete_status'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_complete_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_discount_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_express_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_discount_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_express_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_discount_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_express_limit_time'); ?></th>
			<th><?php echo $this->Paginator->sort('book_title'); ?></th>
			<th><?php echo $this->Paginator->sort('reprint_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_installments'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_space_no'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_circle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_circle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('expiration_date'); ?></th>
			<th><?php echo $this->Paginator->sort('tehai_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('tehai_kanryo_day'); ?></th>
			<th><?php echo $this->Paginator->sort('before_sum_price'); ?></th>
			<th><?php echo $this->Paginator->sort('ul_send_flag_hyosi'); ?></th>
			<th><?php echo $this->Paginator->sort('ul_send_flag_honbun'); ?></th>
			<th><?php echo $this->Paginator->sort('ul_send_flag_kuchie'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_cover_price'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_body_price'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_download_status'); ?></th>
			<th><?php echo $this->Paginator->sort('hyosi_download_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_download_status'); ?></th>
			<th><?php echo $this->Paginator->sort('honbun_download_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_download_status'); ?></th>
			<th><?php echo $this->Paginator->sort('kuchie_download_timestamp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dOrderEstimates as $dOrderEstimate): ?>
	<tr>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['order_estimate_cd']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['estimate_no']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['user_cd']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['order_cd']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['asobi_kasan']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_kasan']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['account_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['sum_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hon_size']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hon_busu']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['tozi']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['seihon']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hon_page']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_insatu']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_yosi']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_insatu']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_yosi']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['asobi']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['asobi_kami']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_insatu']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_yosi']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_sonyu_mai']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_sonyu_ba']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_sonyu_ba_etc']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_name']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['delivery_method_name']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['delivery_date']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['event_name']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_discount_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_express_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_discount_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_express_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_discount_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_express_deadline']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_discount_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_discount_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_express_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_express_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_discount_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_discount_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_express_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_express_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_discount_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_discount_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_express_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_express_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_discount_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_discount_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_express_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_express_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['put_foil_discount_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['put_foil_discount_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['put_foil_express_ratio']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['put_foil_express_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['other_option_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['other_option_detail']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['price_without_tax']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['external_tax']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['regist_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['update_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['order_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['admin_nyuko_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['admin_label_color']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['admin_nyuko_memo']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['keizoku_flag']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_complete_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_complete_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_complete_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_complete_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_complete_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_complete_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_discount_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_express_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_discount_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_express_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_discount_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_express_limit_time']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['book_title']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['reprint_flag']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['delivery_installments']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['delivery_space_no']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['delivery_circle_name']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['customer_circle_name']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['expiration_date']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['tehai_flag']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['tehai_kanryo_day']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['before_sum_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['ul_send_flag_hyosi']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['ul_send_flag_honbun']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['ul_send_flag_kuchie']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_cover_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['pack_body_price']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_download_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['hyosi_download_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_download_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['honbun_download_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_download_status']); ?>&nbsp;</td>
		<td><?php echo h($dOrderEstimate['DOrderEstimate']['kuchie_download_timestamp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dOrderEstimate['DOrderEstimate']['order_estimate_cd'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dOrderEstimate['DOrderEstimate']['order_estimate_cd'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dOrderEstimate['DOrderEstimate']['order_estimate_cd']), array('confirm' => __('Are you sure you want to delete # %s?', $dOrderEstimate['DOrderEstimate']['order_estimate_cd']))); ?>
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
		<li><?php echo $this->Html->link(__('New D Order Estimate'), array('action' => 'add')); ?></li>
	</ul>
</div>
