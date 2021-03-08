/*
 * 2007-2014 PrestaShop
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
 *  @author    Anvanto
 *  @copyright 2016-2017 Anvanto
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

jQuery(document).ready(function () {
    var num_validator = [
        ['an_modal_cookie_opacity', 0, 100],
        ['an_modal_cookie_width', 0, 10000]
    ];
    for (var i = 0; i < num_validator.length; i++) {
        (function (i) {
            jQuery('#' + num_validator[i][0]).on("keyup", function (event) {
                var value = parseInt(jQuery(this).val()) || 0;
                if (jQuery(this).val() == '') {
                    return true;
                }
                if(value < num_validator[i][2] && value > num_validator[i][1]) {
                    this.value = value
                } else {
                    if(value > num_validator[i][2]) {
                        this.value = num_validator[i][2];
                    } else {
                        this.value = num_validator[i][1];
                    }
                }

            });
        })(i);
    }
});