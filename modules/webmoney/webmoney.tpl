<p class="payment_module">
<a href="javascript:$('#webmoney').submit();" title="Оплата с помощью WebMoney">
		<img src="{$this_path}webmoney.gif" style="float:left;" />
		<br />Оплата с помощью WebMoney<br />
		<br style="clear:both;" />
</a>
</p>

<form id="webmoney" accept-charset="windows-1251" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="{$total}">
<input type="hidden" name="LMI_PAYMENT_DESC" value="Оплата заказа №{$id_cart}">
<input type="hidden" name="LMI_PAYMENT_NO" value="{$id_cart}">
<input type="hidden" name="LMI_PAYEE_PURSE" value="{$purse}">
<input type="hidden" name="LMI_SUCCESS_URL" value="{$returnUrl}">
<input type="hidden" name="LMI_SUCCESS_METHOD" value="1">
<input type="hidden" name="LMI_FAIL_URL" value="{$cancelUrl}">
<input type="hidden" name="LMI_FAIL_METHOD" value="1">
</form>