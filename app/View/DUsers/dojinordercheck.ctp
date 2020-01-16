<table class="buy1" style="width:100%;">
<?php //Formの作成
	echo $this->Form->create('cart', array(
		'type'=> 'post',
		'url' => array('controller' => 'DUsers', 'action' => 'dojinordercheck')//確認用　自身へPOST
	));
?>
	<tr>
		<th>商　品　名</th>
		<th>総　額<br /><small>（税込）</small></th>
	</tr>
		<tr class="line">
		<td class="title"><?php echo 'お見積番号：'.h($cart['DOrderEstimate']['estimate_no']).'<br />'; ?>
			<a href="#"><?php echo h($cart['DOrderEstimate']['pack_name']) ?></a>
	<br />
<?php echo h($cart['DOrderEstimate']['hon_size']) . '/'. h($cart['DOrderEstimate']['hon_page']). 'ページ' .h($cart['DOrderEstimate']['hon_busu']).'部'; ?>
</td>
<td class="money"><?php echo h($cart['DOrderEstimate']['sum_price']) ?></td>
</table>


<div class="fbox">
<div class="shoping_full" style="width:
696px;margin:0 auto;">

<p class="indent04">ご請求合計金額：￥<?php echo h($cart['DOrderEstimate']['sum_price']) ?> <span class="txt10">(税込)</span></p>
<div id="border"> </div>
		<p class="indent04">お支払い方法：　クレジットカード決済</p>
</div>
<p class="clear"></p></div>
</div>
<?php echo $this->Form->end(__('Submit')); ?>
</tr>
</table>