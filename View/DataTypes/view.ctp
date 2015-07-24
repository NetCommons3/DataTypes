<div class="dataTypes view">
<h2><?php echo __('Data Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataType['Language']['id'], array('controller' => 'languages', 'action' => 'view', $dataType['Language']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Systemized'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['is_systemized']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trackable Creator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataType['TrackableCreator']['id'], array('controller' => 'users', 'action' => 'view', $dataType['TrackableCreator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trackable Updater'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataType['TrackableUpdater']['id'], array('controller' => 'users', 'action' => 'view', $dataType['TrackableUpdater']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Type'), array('action' => 'edit', $dataType['DataType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Data Type'), array('action' => 'delete', $dataType['DataType']['id']), null, __('Are you sure you want to delete # %s?', $dataType['DataType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
