<?php /* Smarty version 2.6.20, created on 2017-12-28 02:35:37
         compiled from Z:%5Chome%5Clocalhost%5Cwww%5Cm10%5C01%5Cmodules%5Cmoneybookers/moneybookers-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'Z:\\home\\localhost\\www\\m10\\01\\modules\\moneybookers/moneybookers-form.tpl', 39, false),)), $this); ?>
<html>
	<body style="margin: 0; padding: 0;">
		<form action="https://www.moneybookers.com/app/payment.pl" method="post">
			<input type="hidden" name="pay_to_email" value="<?php echo $this->_tpl_vars['pay_to_email']; ?>
" />
			<input type="hidden" name="recipient_description" value="<?php echo $this->_tpl_vars['recipient_description']; ?>
" />
			<input type="hidden" name="transaction_id" value="<?php echo $this->_tpl_vars['transaction_id']; ?>
" />
			<input type="hidden" name="return_url" value="<?php echo $this->_tpl_vars['return_url']; ?>
" />
			<input type="hidden" name="return_url_text" value="<?php echo $this->_tpl_vars['return_url']; ?>
" />
			<input type="hidden" name="cancel_url" value="<?php echo $this->_tpl_vars['return_url']; ?>
" />
			<input type="hidden" name="status_url" value="<?php echo $this->_tpl_vars['status_url']; ?>
" />
			<input type="hidden" name="status_url2" value="<?php echo $this->_tpl_vars['pay_to_email']; ?>
" />
			<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
			<input type="hidden" name="hide_login" value="<?php echo $this->_tpl_vars['hide_login']; ?>
" />
			<input type="hidden" name="pay_from_email" value="<?php echo $this->_tpl_vars['pay_from_email']; ?>
" />
			<input type="hidden" name="firstname" value="<?php echo $this->_tpl_vars['firstname']; ?>
" />
			<input type="hidden" name="lastname" value="<?php echo $this->_tpl_vars['lastname']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['date_of_birth'] ) )): ?><input type="hidden" name="date_of_birth" value="<?php echo $this->_tpl_vars['date_of_birth']; ?>
" /><?php endif; ?>
			<input type="hidden" name="address" value="<?php echo $this->_tpl_vars['address']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['address2'] ) )): ?><input type="hidden" name="address2" value="<?php echo $this->_tpl_vars['address2']; ?>
" /><?php endif; ?>
			<?php if (( ! empty ( $this->_tpl_vars['phone_number'] ) )): ?><input type="hidden" name="phone_number" value="<?php echo $this->_tpl_vars['phone_number']; ?>
" /><?php endif; ?>
			<input type="hidden" name="postal_code" value="<?php echo $this->_tpl_vars['postal_code']; ?>
" />
			<input type="hidden" name="city" value="<?php echo $this->_tpl_vars['city']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['state'] ) )): ?><input type="hidden" name="state" value="<?php echo $this->_tpl_vars['state']; ?>
" /><?php endif; ?>
			<input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
			<input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['amount']; ?>
" />
			<input type="hidden" name="currency" value="<?php echo $this->_tpl_vars['currency']; ?>
" />
			<input type="hidden" name="amount2_description" value="<?php echo $this->_tpl_vars['amount2_description']; ?>
" />
			<input type="hidden" name="amount2" value="<?php echo $this->_tpl_vars['amount2']; ?>
" />
			<input type="hidden" name="amount3_description" value="<?php echo $this->_tpl_vars['amount3_description']; ?>
" />
			<input type="hidden" name="amount3" value="<?php echo $this->_tpl_vars['amount3']; ?>
" />
			<input type="hidden" name="amount4_description" value="<?php echo $this->_tpl_vars['amount4_description']; ?>
" />
			<input type="hidden" name="amount4" value="<?php echo $this->_tpl_vars['amount4']; ?>
" />
			<input type="hidden" name="payment_methods" value="ACC">
			<input type="hidden" name="return_url_target" value="2">  
			<input type="hidden" name="cancel_url_target" value="2">  
			<input type="hidden" name="merchant_fields" value="platform"> 
			<input type="hidden" name="platform" value="prestashop">
			<input type="image" src="<?php echo $this->_tpl_vars['base_dir']; ?>
modules/moneybookers/logo-cc-<?php echo $this->_tpl_vars['id_logo']; ?>
.gif" name="Submit" style="float: left; margin-right: 20px;" />
			<h3 style="float: left; font-size: 11px; font-family: Verdana; color: #5D717E; font-weight: normal; margin-top: 35px;"><?php echo smartyTranslate(array('s' => 'Pay by credit card','mod' => 'moneybookers'), $this);?>
</h2>
			<div style="clear: both;"></div>
		</form>
		<form action="https://www.moneybookers.com/app/payment.pl" method="post">
			<input type="hidden" name="pay_to_email" value="<?php echo $this->_tpl_vars['pay_to_email']; ?>
" />
			<input type="hidden" name="recipient_description" value="<?php echo $this->_tpl_vars['recipient_description']; ?>
" />
			<input type="hidden" name="transaction_id" value="<?php echo $this->_tpl_vars['transaction_id']; ?>
" />
			<input type="hidden" name="return_url" value="<?php echo $this->_tpl_vars['return_url']; ?>
" />
			<input type="hidden" name="return_url_text" value="<?php echo $this->_tpl_vars['return_url']; ?>
" />
			<input type="hidden" name="cancel_url" value="<?php echo $this->_tpl_vars['return_url']; ?>
" />
			<input type="hidden" name="status_url" value="<?php echo $this->_tpl_vars['status_url']; ?>
" />
			<input type="hidden" name="status_url2" value="<?php echo $this->_tpl_vars['pay_to_email']; ?>
" />
			<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
			<input type="hidden" name="hide_login" value="<?php echo $this->_tpl_vars['hide_login']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['logo_url'] ) )): ?><input type="hidden" name="logo_url" value="<?php echo $this->_tpl_vars['logo_url']; ?>
" /><?php endif; ?>
			<input type="hidden" name="pay_from_email" value="<?php echo $this->_tpl_vars['pay_from_email']; ?>
" />
			<input type="hidden" name="firstname" value="<?php echo $this->_tpl_vars['firstname']; ?>
" />
			<input type="hidden" name="lastname" value="<?php echo $this->_tpl_vars['lastname']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['date_of_birth'] ) )): ?><input type="hidden" name="date_of_birth" value="<?php echo $this->_tpl_vars['date_of_birth']; ?>
" /><?php endif; ?>
			<input type="hidden" name="address" value="<?php echo $this->_tpl_vars['address']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['address2'] ) )): ?><input type="hidden" name="address2" value="<?php echo $this->_tpl_vars['address2']; ?>
" /><?php endif; ?>
			<?php if (( ! empty ( $this->_tpl_vars['phone_number'] ) )): ?><input type="hidden" name="phone_number" value="<?php echo $this->_tpl_vars['phone_number']; ?>
" /><?php endif; ?>
			<input type="hidden" name="postal_code" value="<?php echo $this->_tpl_vars['postal_code']; ?>
" />
			<input type="hidden" name="city" value="<?php echo $this->_tpl_vars['city']; ?>
" />
			<?php if (( ! empty ( $this->_tpl_vars['state'] ) )): ?><input type="hidden" name="state" value="<?php echo $this->_tpl_vars['state']; ?>
" /><?php endif; ?>
			<input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
			<input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['amount']; ?>
" />
			<input type="hidden" name="currency" value="<?php echo $this->_tpl_vars['currency']; ?>
" />
			<input type="hidden" name="amount2_description" value="<?php echo $this->_tpl_vars['amount2_description']; ?>
" />
			<input type="hidden" name="amount2" value="<?php echo $this->_tpl_vars['amount2']; ?>
" />
			<input type="hidden" name="amount3_description" value="<?php echo $this->_tpl_vars['amount3_description']; ?>
" />
			<input type="hidden" name="amount3" value="<?php echo $this->_tpl_vars['amount3']; ?>
" />
			<input type="hidden" name="amount4_description" value="<?php echo $this->_tpl_vars['amount4_description']; ?>
" />
			<input type="hidden" name="amount4" value="<?php echo $this->_tpl_vars['amount4']; ?>
" />
			<input type="hidden" name="payment_methods" value="WLT">
			<input type="hidden" name="return_url_target" value="2">  
			<input type="hidden" name="cancel_url_target" value="2">  
			<input type="hidden" name="merchant_fields" value="platform"> 
			<input type="hidden" name="platform" value="prestashop">
			<input type="image" style="float: left; margin-right: 20px;" src="<?php echo $this->_tpl_vars['base_dir']; ?>
modules/moneybookers/logo-mb-<?php echo $this->_tpl_vars['id_logo_wallet']; ?>
.gif" name="Submit">
			<h3 style="float: left; font-size: 11px; font-family: Verdana; color: #5D717E; font-weight: normal; margin-top: 35px;"><?php echo smartyTranslate(array('s' => 'Pay by Moneybookers eWallet','mod' => 'moneybookers'), $this);?>
</h2>
			<div style="clear: both;"></div>
		</form>
	</body>
</html>