<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
	'left' => 'basket-item-label-left',
	'center' => 'basket-item-label-center',
	'right' => 'basket-item-label-right',
	'bottom' => 'basket-item-label-bottom',
	'middle' => 'basket-item-label-middle',
	'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>

<script id="basket-item-template" type="text/html">
<div class="basket-items-list-item-container{{#SHOW_RESTORE}} basket-items-list-item-container-expend{{/SHOW_RESTORE}} checkout-card"
id="basket-item-{{ID}}" data-entity="basket-item" data-id="{{ID}}">
	<?
		if (in_array('DETAIL_PICTURE', $arParams['COLUMNS_LIST']))
		{
		?>
		<div class="checkout-card__image">
			<img  alt="{{NAME}}"
				src="{{{IMAGE_URL}}}{{^IMAGE_URL}}<?=$templateFolder?>/images/no_photo.png{{/IMAGE_URL}}">
		</div>
		<?
			}
		?>
	
	<div class="checkout-card__data">
	 
	  <h2 class="checkout-card__title">
		<span>{{NAME}}</span> 
		<button class="basket-item-actions-remove icon-button icon-button_delete icon-button icon-button_delete " data-entity="basket-item-delete"></button>
		
	  </h2>
	  <p class="checkout-card__description">
	  	{{{DESCRIPTION_PRODUCT}}}
	  </p>
	
			<div class="checkout-card__buttons"
					data-entity="basket-item-quantity-block">
					<button class="basket-item-amount-btn-minus checkout-card__button" data-entity="basket-item-quantity-minus"></button>
					<div class="basket-item-amount-filed-block">
						<input type="number" class="basket-item-amount-filed checkout-card__input" value="{{QUANTITY}}"
							{{#NOT_AVAILABLE}} disabled="disabled"{{/NOT_AVAILABLE}}
							data-value="{{QUANTITY}}" data-entity="basket-item-quantity-field"
							id="basket-item-quantity-{{ID}}">
					</div>
					<button class="basket-item-amount-btn-plus checkout-card__button checkout-card__button_plus" data-entity="basket-item-quantity-plus"></button>			
		</div>
		
		<div class="basket-item-price-current-text checkout-card__price" id="basket-item-price-{{ID}}">
				{{{PRICE_FORMATED}}}
		</div>
 		</div>
</div>
</script>