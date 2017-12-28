<?php

/**
  * Admin panel footer, footer.inc.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */

if (!defined('_PS_VERSION_'))
	exit();
ob_flush();
?>

				</div>
			</div>
			<?php echo Module::hookExec('backOfficeFooter'); ?>
			<p id="footer">
				Работает на <a href="http://www.prestashop.com/" target="_blank">PrestaShop&trade;</a><br />
				Русификация <a href="http://aceweb.ru/index.php?directory=a/010" target="_blank">aceweb.ru</a><br />
				Версия <?php echo _PS_VERSION_; ?>
				- <?php echo number_format(microtime(true) - $timerStart, 3, '.', ''); ?> сек.
			</p>
		</div>
	</body>
</html>