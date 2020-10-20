<?php

namespace PrestaShop\Module\PrestashopFacebook\Config;

class Config
{
    const API_VERSION = 'v8.0';

    const PS_PIXEL_ID = 'PS_FACEBOOK_PIXEL_ID';
    const FB_ACCESS_TOKEN = 'PS_FACEBOOK_ACCESS_TOKEN';
    const PS_FACEBOOK_PROFILES = 'PS_FACEBOOK_PROFILES';
    const PS_FACEBOOK_PAGES = 'PS_FACEBOOK_PAGES';
    const PS_FACEBOOK_BUSINESS_MANAGER_ID = 'PS_FACEBOOK_BUSINESS_MANAGER_ID';
    const PS_FACEBOOK_AD_ACCOUNT_ID = 'PS_FACEBOOK_AD_ACCOUNT_ID';
    const PS_FACEBOOK_CATALOG_ID = 'PS_FACEBOOK_CATALOG_ID';
    const PS_FACEBOOK_EXTERNAL_BUSINESS_ID = 'PS_FACEBOOK_EXTERNAL_BUSINESS_ID';
    const PS_FACEBOOK_PIXEL_ENABLED = 'PS_FACEBOOK_PIXEL_ENABLED';

    const AVAILABLE_FBE_FEATURES = ['messenger_chat', 'page_cta', 'page_shop', 'ig_shopping'];
    const FBE_FEATURES_REQUIRING_PRODUCT_SYNC = ['page_shop', 'ig_shopping'];
}
