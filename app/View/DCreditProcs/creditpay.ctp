<table class="credit1" style="width:100%;">
<tr>
<th>商　品　名</th>
<th>総　額<br /><small>（税込）</small></th>
</tr>
<tr class="line">
<td class="title">
<?php echo $this->Html->script('jquery-3.4.1.min', array('inline' => false)); ?>
<?php echo $this->Html->script('SBpayment', array('inline' => false)); ?>

<script type="text/javascript" src="https://stbtoken.sps-system.com/sbpstoken/com_sbps_system_token.js"></script>

<?php echo 'お見積番号：'.h($cart['DOrderEstimate']['estimate_no']).'<br />';
?>
<a href="#"><?php echo h($cart['DOrderEstimate']['pack_name']) ?></a>
<br />
<?php echo h($cart['DOrderEstimate']['hon_size']) . '/'. h($cart['DOrderEstimate']['hon_page']). 'ページ' .h($cart['DOrderEstimate']['hon_busu']).'部'; ?>
</td>
<td class="money"><?php echo h($cart['DOrderEstimate']['sum_price']) ?></td>



<?php
	$hoge = $this->html->url(array('controller'=>'DCreditProcs', 'action'=>'SBpay_test'));//ajax用URL生成
?>
<script type="text/javascript">
    var hoge = <?php echo json_encode($hoge); ?>;
    console.log(hoge);
</script>

<script>var Post_url="<?php ?>"</script>

<?php echo __('Actions'); ?>

	<?php echo $this->Form->create('test', array(
		'type'=> 'post',
    	'url' => array('controller' => '', 'action' => '')
		));
		echo $this->Form->input('カード番号', ['value' => '4111111111111111', 'id' => 'card_no']);
		echo $this->Form->input('カード名義', ['value' => '', 'id' => 'card_nm']);
		echo $this->Form->input('有効期限　年', ['value' => '2020', 'id' => 'exp_yy']);
		echo $this->Form->input('有効期限　月', ['value' => '12', 'id' => 'exp_mm']);
		echo $this->Form->input('支払回数', ['value' => '1', 'id' => 'pay_times']);
		echo $this->Form->input('セキュリティコード', ['value' => '123', 'id' => 'card_sc']);
		echo $this->Form->input('トークン本体', ['value' => '', 'id' => 'token']);//確認用　本番ではhiddenへ
		echo $this->Form->input('トークンキー', ['value' => '', 'id' => 'tokenKey']);//確認用　本番ではhiddenへ
		echo $this->Form->input('カードブランドコード', ['value' => '', 'id' => 'cardBrandCode']);//確認用　本番ではhiddenへ
		echo $this->Form->input('buttonクリック確認用', ['value' => '', 'id' => 'notP']);//確認用　本番ではhiddenへ
		echo $this->Form->input('user_addr_flag確認用', ['value' => '', 'id' => 'user_addr_flag']);//確認用　本番ではhiddenへ
		echo $this->Form->input('card_pay確認用', ['value' => '', 'id' => 'card_pay']);//確認用　本番ではhiddenへ
		echo $this->Form->input('card_co確認用', ['value' => '', 'id' => 'card_co']);//確認用　本番ではhiddenへ
		?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">


<button id="btn01">ボタン</button>
<input type="button" id="btn1" value="てすとへっど">
<input type="button" value="Test" onclick='doPurchase()'>

<script>
// 何かしらボタンが押された時に処理が実行される
$('#btn1').click(function() {
    // URLを生成する
    var url = "<?=$this->Html->url(array('controller' => 'DCreditProcs', 'action' => 'hoge'))?>";
//    var hoge = document.getElementByID('card_no').value;
 //   var hoge = document.getElementByID('pay_times').value;
	<?php $temp = array ('piyo' => 'hoge', 'piyopiyo' => 'hogehoge' )?>

    var data = <?php echo json_encode($temp); ?>
       // Ajaxの処理を呼び出す
    execAjax(url, data);
});

</script>

</tr>
</table>