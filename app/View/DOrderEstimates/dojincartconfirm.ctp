<table class="buy1" style="width:100%;">
<tr>
<th>商　品　名</th>
<th>総　額<br /><small>（税込）</small></th>
</tr>
<tr class="line">
<td class="title">
<?php echo 'お見積番号：'.h($cart['DOrderEstimate']['estimate_no']).'<br />';
?>
<a href="#"><?php echo h($cart['DOrderEstimate']['pack_name']) ?></a>
<br />
<?php echo h($cart['DOrderEstimate']['hon_size']) . '/'. h($cart['DOrderEstimate']['hon_page']). 'ページ' .h($cart['DOrderEstimate']['hon_busu']).'部'; ?>
</td>
<td class="money"><?php echo h($cart['DOrderEstimate']['sum_price']) ?></td>


<?php echo __('Actions'); ?>

<?php echo $this->Form->create(false, array(
		'type'=> 'get',
    	'url' => array('controller' => 'DUsers', 'action' => 'dojinpaymentmethod')
		));
		echo $this->Form->hidden('dojin', ['value' => $dojin]);
		echo $this->Form->hidden('estimate_cd', ['value' => $estimate_cd]);
	?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">

</tr>
</table>