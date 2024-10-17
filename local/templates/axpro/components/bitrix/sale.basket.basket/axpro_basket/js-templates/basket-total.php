<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">
						<div class="basket-coupon-block-total-price-current checkout__price" data-entity="basket-total-price">
							Итого: {{{PRICE_FORMATED}}}
						</div>
</script>