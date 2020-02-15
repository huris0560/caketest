<table class="buy1" style="width:100%;">
<tr>
<th>支払方法の確認　</th>
</tr>
<tr class="line">
<td class="title">

<?php
//Formの作成

echo $this->Form->create('cart', array(
		'type'=> 'post',
		'url' => array('controller' => 'DUsers', 'action' => 'dojinordercheck')//確認用　自身へPOST
));

//labelの生成
echo $this->Form->label('支払方法を選択してください。');
echo '<br>';

	//radioボタンの作成
	$options = [
		'1' => 'クレジットカード決済',
		'9' => '銀行振込'
	];//確認ページはさんで決済ページなのに決済ページに直接接続してる。アカン！！

	echo $this->Form->radio('pay_mathod', $options);
	echo $this->Form->hidden('dojin', ['value' => $dojin]);
	echo $this->Form->hidden('estimate_cd', ['value' => $estimate_cd]);


?>
</table>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
<h3><?php echo __('Actions'); ?></h3>

</tr>
</table>