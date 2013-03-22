<div data-role="content">

	<div class="ui-grid-solo">
        <div class="ui-block-a">
			<?php echo $this->Session->flash('auth'); ?>
		</div>
	</div>

	<div class="ui-grid-solo">
        <div class="ui-block-a">	
			<?php echo $this->Form->create('User');?>

			<?php echo __('Please enter your username and password'); ?>

		    
			<?php
				//echo '<div class="ui-grid-solo">';
				//echo '<div class="ui-block-a">';
		        echo $this->Form->input('username');
				//echo '</div>';
				//echo '</div>';
				//echo '<div class="ui-grid-solo">';
				//echo '<div class="ui-block-a">';
		        echo $this->Form->input('password');
				//echo '</div>';
				//echo '</div>';
		    ?>
		

		        	<!--<?php echo $this->Form->submit(__('Login', true), array('name' => 'ok', 'div' => false)); ?>

			    	<?php echo $this->Form->submit(__('Cancel', true), array('name' => 'cancel','div' => false)); ?>-->

			<br><br><br>

			<?php echo $this->Form->end('Login');?>

		<!--<?php echo $this->Form->end(__('Login'));?>-->
		</div>
	</div>
</div>
