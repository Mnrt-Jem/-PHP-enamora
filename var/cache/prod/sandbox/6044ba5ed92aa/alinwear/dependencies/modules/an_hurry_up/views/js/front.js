/**
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
*/
(function ($, window, undefined) {
	'use strict';
	
	function progressLeft(bar, counter) {
		bar.css('width', 100 * +counter.text() / bar.attr('data-max') + '%');
	}
	$(document).ready(function() {
		let progressBar, progressCount;
		$('.an_hurry_up').each( function(index) {
			progressBar = $(this).find('.an_hurry_up-progress-fill');
			progressCount = $(this).find('.an_hurry_up-count');
			progressLeft(progressBar, progressCount);
		});
		/*
		progressCount.on('DOMSubtreeModified', function() {
			progressLeft(progressBar, progressCount);
		})
		*/
	});
	$(document).ajaxSuccess(function() {
		/*
		let progressBar = $('.an_hurry_up-progress-fill'),
			progressCount = $('.an_hurry_up-count');
		progressLeft(progressBar, progressCount);
		*/
		let progressBar, progressCount;
		$('.an_hurry_up').each( function(index) {
			progressBar = $(this).find('.an_hurry_up-progress-fill');
			progressCount = $(this).find('.an_hurry_up-count');
			progressLeft(progressBar, progressCount);
		});
	});
})(jQuery, window);