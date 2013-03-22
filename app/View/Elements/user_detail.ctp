<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
	<h2><?php  echo __('User Information');?></h2>
	<ul data-role="listview" data-filter="false" data-inset="true">
		<li data-role="list-divider" >Personal Info</li>
		<?php
			echo '<li>';
			echo h($user['User']['firstname']);
			echo '&nbsp;';
			echo h($user['User']['lastname']);
			echo '</li>';
			echo '<li>';
			echo h($user['Household']['address']);
			echo '</li>';
			echo '<li>';
			echo h($user['Household']['city']);
			echo ',' . '&nbsp;';
			echo h($user['Household']['state']);
			echo '&nbsp;';
			echo h($user['Household']['zip']);
			echo '<li>';
			echo h($user['Household']['country']);
			echo '</li>';
			echo '<li>';
			echo h($user['User']['phone']);
			echo '</li>';
			echo '<li>';
			echo h($user['User']['email']);
			echo '</li>';
		?>
		<li data-role="list-divider" >Income Info</li>
		<?php

			echo '<li>';
			echo ($user['User']['income_amt']);
			echo '&nbsp;';
			echo ($user['Payfreq']['name']);
			echo '</li>';
			echo '<li>';
			echo h($user['User']['role']);
			echo ' account created on: ';
			echo h($user['User']['created']);
			echo '</li>';
		?>
		
<!--		
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Household'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Household']['id'], array('controller' => 'households', 'action' => 'view', $user['Household']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Income Amt'); ?></dt>
		<dd>
			<?php echo h($user['User']['income_amt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payfreq'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Payfreq']['name'], array('controller' => 'payfreqs', 'action' => 'view', $user['Payfreq']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
	</dl>
-->
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
	</ul>
</div>