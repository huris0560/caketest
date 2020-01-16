<table class="buy1" style="width:100%;">
<tr>
<th>支払方法の確認　</th>
<th>総　額<br /><small>（税込）</small></th>
</tr>
<tr class="line">
<td class="title">
<?php echo 'お見積番号：'.h($hoge['DOrderEstimate']['estimate_no']).'<br />';
?>
<a href="#"><?php echo h($hoge['DOrderEstimate']['pack_name']) ?></a>
<br />
<?php echo h($hoge['DOrderEstimate']['hon_size']) . '/'. h($hoge['DOrderEstimate']['hon_page']). 'ページ' .h($hoge['DOrderEstimate']['hon_busu']).'部'; ?>
</td>
<td class="money"><?php echo h($hoge['DOrderEstimate']['sum_price']) ?></td>

<?php echo $this->Form->create(false, array(
		'type'=> 'get',
    	'url' => array('controller' => 'DUsers', 'action' => '')
		));
		echo $estimate_cd;

//		echo $this->Form->hidden('dojin', ['value' => $dojin]);
//		echo $this->Form->hidden('estimate_cd', ['value' => $estimate_cd]);
	?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>

</tr>
</table>