<div class="copyTest01s index">
	<h2><?php echo __('Copy Test01s'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('testtestNo'); ?></th>
			<th><?php echo $this->Paginator->sort('testName'); ?></th>
			<th><?php echo $this->Paginator->sort('testDate'); ?></th>
			<th><?php echo $this->Paginator->sort('testComment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($copyTest01s as $copyTest01): ?>
	<tr>
		<td><?php echo h($copyTest01['CopyTest01']['testtestNo']); ?>&nbsp;</td>
		<td><?php echo h($copyTest01['CopyTest01']['testName']); ?>&nbsp;</td>
		<td><?php echo h($copyTest01['CopyTest01']['testDate']); ?>&nbsp;</td>
		<td><?php echo h($copyTest01['CopyTest01']['testComment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $copyTest01['CopyTest01']['testtestNo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $copyTest01['CopyTest01']['testtestNo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $copyTest01['CopyTest01']['testtestNo']), array('confirm' => __('Are you sure you want to delete # %s?', $copyTest01['CopyTest01']['testtestNo']))); ?>
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
		<li><?php echo $this->Html->link(__('New Copy Test01'), array('action' => 'add')); ?></li>
	</ul>
</div>
