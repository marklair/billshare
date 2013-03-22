<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon-precomposed" href="/billshare/css/images/apple-touch-icon-72x72-precomposed.png" />

	<?php

		echo $this->Html->meta('icon');
		
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('jquery.mobile-1.2.0');
		//echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'nav', 'master', 'mobile.min'));
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
   		// include jquery and my javascript file
    	echo $this->Html->script('jquery');
    	echo '	<script>
		$(document).bind("mobileinit", function () {
		 $.mobile.ajaxEnabled = false;
		});
	</script>';
		//echo $this->Html->script('jqscripts');
		echo $this->Html->script('jquery.mobile-1.2.0.js');
		echo $this->Html->script('jqscripts');
	?>
</head>
<body>
	<div data-role="page" id="one" class="type-home">
		<div data-role="header">
			<a href="#four" data-icon="gear" data-transition="flip" data-theme="a">Account</a>
			
			<h1>
				<?php 
					echo $this->Html->image("/css/images/bill_share_logo_sm.png", array(
    					"alt" => "Home",
    					'url' => array('controller' => 'pages', 'action' => '')
					));
				?>
			</h1>
			<!--<h1><a href="/pages"><img src="/billshare/css/images/bill_share_logo_sm.png" /></a></h1>-->
			
			<a href="#five" data-role="button" data-icon="grid" data-iconpos="notext" data-theme="a" data-inline="true" data-transition="slidefade" class="ui-btn-right">Admin Menu</a>
		</div>
		<div data-role="navbar">
			<ul>
			<li><a href="#one" data-transition="slidedown">Main</a></li>
			<li><a href="#two" data-transition="slideup">Household</a></li>
			<li><a href="#three"data-transition="slideup">Social</a></li>
			</ul>
		</div><!-- /navbar -->
			
		<!-- begin content -->	
		<div data-role="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>		

		</div><!-- /content ~~>

		
	<div data-role="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false)
			);

		?>
	</div><!-- /footer -->


</div>





<div data-role="page" id="two" class="type-home">
	<div data-role="header">


			<a href="#four" data-icon="gear" data-transition="flip" data-theme="a" data-inline="true">Account</a>
			
			<h1>
				<?php 
					echo $this->Html->image("/css/images/bill_share_logo_sm.png", array(
    					"alt" => "Home",
    					'url' => array('controller' => 'pages', 'action' => 'index')
					));
				?>
			</h1>
			<!--<h1><a href="/pages"><img src="/billshare/css/images/bill_share_logo_sm.png" /></a></h1>-->
			
			<a href="#five" data-role="button" data-icon="grid" data-iconpos="notext" data-theme="a" data-inline="true" data-transition="slidefade" class="ui-btn-right">Admin Menu</a>
			<!--<a href="index.html" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="a" data-inline="true">Close</a>-->

	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#one" data-transition="slidedown">Main</a></li>
			<li><a href="#two" data-transition="slideup">Household</a></li>
			<li><a href="#three"data-transition="slideup">Social</a></li>
		</ul>
	</div><!-- /navbar -->

	<div data-role="content">
		<?php
			echo $this->element('menu_household');
		?>
	</div>
	<div data-role="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false)
			);

		?>
	</div><!-- /footer -->

</div>







<div data-role="page" id="three" class="type-home">
	<div data-role="header">


			<a href="#four" data-icon="gear" data-transition="flip" data-theme="a" data-inline="true">Account</a>
			
			<h1>
				<?php 
					echo $this->Html->image("/css/images/bill_share_logo_sm.png", array(
    					"alt" => "Home",
    					'url' => array('controller' => 'pages', 'action' => 'index')
					));
				?>
			</h1>
			<!--<h1><a href="/pages"><img src="/billshare/css/images/bill_share_logo_sm.png" /></a></h1>-->
			
			<a href="#five" data-role="button" data-icon="grid" data-iconpos="notext" data-theme="a" data-inline="true" data-transition="slidefade" class="ui-btn-right">Admin Menu</a>
			<!--<a href="index.html" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="a" data-inline="true">Close</a>-->

	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#one" data-transition="slidedown">Main</a></li>
			<li><a href="#two" data-transition="slideup">Household</a></li>
			<li><a href="#three"data-transition="slideup">Social</a></li>
		</ul>
	</div><!-- /navbar -->

	<div data-role="content">
		<?php
			echo $this->element('menu_social');
		?>
	</div>
	<div data-role="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false)
			);

		?>
	</div><!-- /footer -->

</div>



<div data-role="page" id="four" class="type-home">
	<div data-role="header">


			<a href="#four" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="a" data-inline="true" data-rel="back" data-transition="flip" >Account</a>
			
			
			<h1>
				<?php 
					echo $this->Html->image("/css/images/bill_share_logo_sm.png", array(
    					"alt" => "Home",
    					'url' => array('controller' => 'pages', 'action' => 'index')
					));
				?>
			</h1>
			<!--<h1><a href="/pages"><img src="/billshare/css/images/bill_share_logo_sm.png" /></a></h1>-->
			
			<a href="#five" data-role="button" data-icon="grid" data-iconpos="notext" data-theme="a" data-inline="true" data-transition="slidefade" class="ui-btn-right">Admin Menu</a>
			<!--<a href="index.html" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="a" data-inline="true">Close</a>-->

	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#one" data-transition="slidedown">Main</a></li>
			<li><a href="#two" data-transition="slideup">Household</a></li>
			<li><a href="#three"data-transition="slideup">Social</a></li>
		</ul>
	</div><!-- /navbar -->

	<div data-role="content">
		<?php
			echo $this->element('menu_account');
		?>
	</div>
	<div data-role="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false)
			);

		?>
	</div><!-- /footer -->

</div>


<div data-role="page" id="five" class="type-home">
	<div data-role="header">


			<a href="#four" data-icon="gear" data-transition="flip" data-theme="a" data-inline="true">Account</a>
			
			<h1>
				<?php 
					echo $this->Html->image("/css/images/bill_share_logo_sm.png", array(
    					"alt" => "Home",
    					'url' => array('controller' => 'pages', 'action' => 'index')
					));
				?>
			</h1>
			
			<!--<h1><a href="/pages"><img src="/billshare/css/images/bill_share_logo_sm.png" /></a></h1>-->
			
			<a href="#five" data-role="button" data-icon="arrow-r" data-iconpos="notext" data-theme="a" data-inline="true" data-rel="back" data-transition="slidefade" class="ui-btn-right">Admin Menu</a>
			<!--<a href="#five" data-role="button" data-icon="arrow-r" data-iconpos="notext" data-theme="a" data-rel="back" class="ui-btn-right">Admin Menu</a>-->
			<!--<a href="index.html" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="a" data-inline="true">Close</a>-->

	</div>
	<div data-role="navbar">
		<ul>
			<li><a href="#one" data-transition="slidedown">Main</a></li>
			<li><a href="#two" data-transition="slideup">Household</a></li>
			<li><a href="#three"data-transition="slideup">Social</a></li>
		</ul>
	</div><!-- /navbar -->

	<div data-role="content">
		<?php
			echo $this->element('menu_admin');
		?>
	</div>
	<div data-role="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false)
			);

		?>
	</div><!-- /footer -->
	<?php echo $this->element('sql_dump'); ?>
</div>

	
	<!--</div><!-- /page -->
	<script>
		$(document).ready(function() {
			$('div').live('pagehide', function(event, ui){
			  var page = jQuery(event.target);

			  if(page.attr('data-cache') == 'never'){
			    page.remove();
			  };
			});


		});
			function hideAddressBar()
			{
			  if(!window.location.hash)
			  {
			      if(document.height < window.outerHeight)
			      {
			          document.body.style.height = (window.outerHeight + 50) + 'px';
			      }
			 
			      setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
			  }
			}

		 
		window.addEventListener("load", function(){ if(!window.pageYOffset){ hideAddressBar(); } } );
		window.addEventListener("orientationchange", hideAddressBar );
	</script>
</body>
</html>
