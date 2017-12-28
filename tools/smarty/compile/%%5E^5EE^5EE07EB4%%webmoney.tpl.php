<?php /* Smarty version 2.6.20, created on 2017-12-28 02:36:47
         compiled from Z:%5Chome%5Clocalhost%5Cwww%5Cm10%5C01%5Cmodules%5Cwebmoney/webmoney.tpl */ ?>
<p class="payment_module">
<a href="javascript:$('#webmoney').submit();" title="Оплата с помощью WebMoney">
		<img src="<?php echo $this->_tpl_vars['this_path']; ?>
webmoney.gif" style="float:left;" />
		<br />Оплата с помощью WebMoney<br />
		<br style="clear:both;" />
</a>
</p>

<form id="webmoney" accept-charset="windows-1251" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?php echo $this->_tpl_vars['total']; ?>
">
<input type="hidden" name="LMI_PAYMENT_DESC" value="Оплата заказа №<?php echo $this->_tpl_vars['id_cart']; ?>
">
<input type="hidden" name="LMI_PAYMENT_NO" value="<?php echo $this->_tpl_vars['id_cart']; ?>
">
<input type="hidden" name="LMI_PAYEE_PURSE" value="<?php echo $this->_tpl_vars['purse']; ?>
">
<input type="hidden" name="LMI_SUCCESS_URL" value="<?php echo $this->_tpl_vars['returnUrl']; ?>
">
<input type="hidden" name="LMI_SUCCESS_METHOD" value="1">
<input type="hidden" name="LMI_FAIL_URL" value="<?php echo $this->_tpl_vars['cancelUrl']; ?>
">
<input type="hidden" name="LMI_FAIL_METHOD" value="1">
</form>