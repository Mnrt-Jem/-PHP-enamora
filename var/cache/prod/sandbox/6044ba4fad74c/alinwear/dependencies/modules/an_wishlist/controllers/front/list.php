<?php
/**
 * 2020 Anvanto
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 *  @author Anvanto <anvantoco@gmail.com>
 *  @copyright  2020 Anvanto
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

class an_wishlistlistModuleFrontController extends ModuleFrontController
{

    const PREFIX = "an_wishlist_";

    public function __construct()
    {
        if (!Module::getInstanceByName('an_wishlist')->getParam('wishlist_for_guests') && !Tools::getValue('wishlist')) { 
			$this->auth = true;
		}
		
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();	
		
        if (Context::getContext()->customer->isLogged()) {
            $idCustomer = (int) Context::getContext()->customer->id;
            $is_guest = 0;
        } else {
            $is_guest = 1;
            $idCustomer = Context::getContext()->cookie->id_guest;
        }		
		
		$idWish = an_wish::findWishlistByCustomer($idCustomer, $is_guest);
		
		if (Tools::getValue('wishlist')){
			$idWish = (int)Tools::getValue('wishlist');
		}
		
        $products = an_wish_products::getProductsWishlist((int) $idWish);
        
        $listing = new an_wishListing();
        $products =  $listing->prepare($products);
		
 		$wishlistLink = Context::getContext()->link->getModuleLink(
			'an_wishlist', 
			'list', 
			[
				'wishlist' => $idWish, 
			],
			true
		); 		

		$this->setTemplate("module:an_wishlist/views/templates/front/list.tpl");
		
        
		$this->context->smarty->assign('wishlistLink', $wishlistLink);
        $this->context->smarty->assign('products', $products);
        $this->context->smarty->assign('config', Module::getInstanceByName('an_wishlist')->getConfig());
    }
}
