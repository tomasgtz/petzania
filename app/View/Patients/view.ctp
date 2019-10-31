<div class="patients view">
<h2><?php echo __('Patient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pet Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['pet_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pet Race'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['pet_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pet Dob'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['pet_dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner Phone'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['owner_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Street'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Number'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Col'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address_col']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address City'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Zip'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patient['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $patient['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patient'), array('action' => 'delete', $patient['Patient']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $patient['Patient']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
