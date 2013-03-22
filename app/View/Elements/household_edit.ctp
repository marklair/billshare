		<div class="households form">
		<?php echo $this->Form->create('Household');?>
			<fieldset>
				<legend><?php echo __('Edit Household'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('address');
//				echo $this->Form->input('user_id');
				echo $this->Form->input('city');
				echo $this->Form->input('state');
				echo $this->Form->input('zip');
				echo $this->Form->input('country');
				echo $this->Form->input('sharestyle_id');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit'));?>
		</div>