<table class="buy1" style="width:100%;">
<tr>
<th>商　品　名</th>
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

</tr>
</table>