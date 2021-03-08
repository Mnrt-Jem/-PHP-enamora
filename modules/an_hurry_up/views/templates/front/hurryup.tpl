{**
* 2019 Anvanto
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author Anvanto (anvantoco@gmail.com)
*  @copyright  2019 anvanto.com

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $product.quantity <= $config.stockProgressBarMaxValue}
{if $config.stockProgressBarColor!=''}
<style>
.an_hurry_up-progress-fill { background-color: {$config.stockProgressBarColor} !important; }
</style>
{/if}
    <div class="an_hurry_up">
        <div class="an_hurry_up-text">
            {if $product.quantity > 0}
                {l s='Hurry up! Only ' mod='an_hurry_up'}
                <span class="an_hurry_up-count">{$product.quantity}</span>
                {l s=' item(s) left in Stock!' mod='an_hurry_up'}
            {else}
                {l s='Sorry, no items left.' mod='an_hurry_up'}
            {/if}
        </div>
        <div class="an_hurry_up-progress">
            <div class="an_hurry_up-progress-fill" data-max="{$config.stockProgressBarMaxValue}"></div>
        </div>
    </div>

{/if}