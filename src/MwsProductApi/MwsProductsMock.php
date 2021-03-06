<?php namespace RaffW\MwsProductApi;

/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 *
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 *           Library Version: 2014-10-20
 *           Generated: Fri Oct 17 17:59:56 GMT 2014
 */

use RaffW\MwsProductApi\Model\GetCompetitivePricingForASINResponse;
use RaffW\MwsProductApi\Model\GetCompetitivePricingForSKUResponse;
use RaffW\MwsProductApi\Model\GetLowestOfferListingsForASINResponse;
use RaffW\MwsProductApi\Model\GetLowestOfferListingsForSKUResponse;
use RaffW\MwsProductApi\Model\GetMatchingProductResponse;
use RaffW\MwsProductApi\Model\GetMatchingProductForIdResponse;
use RaffW\MwsProductApi\Model\GetMyPriceForASINResponse;
use RaffW\MwsProductApi\Model\GetMyPriceForSKUResponse;
use RaffW\MwsProductApi\Model\GetProductCategoriesForASINResponse;
use RaffW\MwsProductApi\Model\GetProductCategoriesForSKUResponse;
use RaffW\MwsProductApi\Model\GetServiceStatusResponse;
use RaffW\MwsProductApi\Model\ListMatchingProductsResponse;

class MwsProductsMock implements MwsProductsInterface {

    // Public API ------------------------------------------------------------//

    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForASIN request or GetCompetitivePricingForASIN object itself
     *
     * @see GetCompetitivePricingForASIN
     * @return GetCompetitivePricingForASINResponse
     *
     * @throws MwsProductsException
     */
    public function getCompetitivePricingForASIN($request)
    {
        return GetCompetitivePricingForASINResponse::fromXML($this->_invoke('GetCompetitivePricingForASIN'));
    }

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForSKU request or GetCompetitivePricingForSKU object itself
     *
     * @see GetCompetitivePricingForSKU
     * @return GetCompetitivePricingForSKUResponse
     *
     * @throws MwsProductsException
     */
    public function getCompetitivePricingForSKU($request)
    {
        return GetCompetitivePricingForSKUResponse::fromXML($this->_invoke('GetCompetitivePricingForSKU'));
    }

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForASIN request or GetLowestOfferListingsForASIN object itself
     *
     * @see GetLowestOfferListingsForASIN
     * @return GetLowestOfferListingsForASINResponse
     *
     * @throws MwsProductsException
     */
    public function getLowestOfferListingsForASIN($request)
    {
        return GetLowestOfferListingsForASINResponse::fromXML($this->_invoke('GetLowestOfferListingsForASIN'));
    }

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForSKU request or GetLowestOfferListingsForSKU object itself
     *
     * @see GetLowestOfferListingsForSKU
     * @return GetLowestOfferListingsForSKUResponse
     *
     * @throws MwsProductsException
     */
    public function getLowestOfferListingsForSKU($request)
    {
        return GetLowestOfferListingsForSKUResponse::fromXML($this->_invoke('GetLowestOfferListingsForSKU'));
    }

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for GetMatchingProduct request or GetMatchingProduct object itself
     *
     * @see GetMatchingProduct
     * @return GetMatchingProductResponse
     *
     * @throws MwsProductsException
     */
    public function getMatchingProduct($request)
    {
        return GetMatchingProductResponse::fromXML($this->_invoke('GetMatchingProduct'));
    }

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for GetMatchingProductForId request or GetMatchingProductForId object itself
     *
     * @see GetMatchingProductForId
     * @return GetMatchingProductForIdResponse
     *
     * @throws MwsProductsException
     */
    public function getMatchingProductForId($request)
    {
        return GetMatchingProductForIdResponse::fromXML($this->_invoke('GetMatchingProductForId'));
    }

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForASIN request or GetMyPriceForASIN object itself
     *
     * @see GetMyPriceForASIN
     * @return GetMyPriceForASINResponse
     *
     * @throws MwsProductsException
     */
    public function getMyPriceForASIN($request)
    {
        return GetMyPriceForASINResponse::fromXML($this->_invoke('GetMyPriceForASIN'));
    }

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForSKU request or GetMyPriceForSKU object itself
     *
     * @see GetMyPriceForSKU
     * @return GetMyPriceForSKUResponse
     *
     * @throws MwsProductsException
     */
    public function getMyPriceForSKU($request)
    {
        return GetMyPriceForSKUResponse::fromXML($this->_invoke('GetMyPriceForSKU'));
    }

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForASIN request or GetProductCategoriesForASIN object itself
     *
     * @see GetProductCategoriesForASIN
     * @return GetProductCategoriesForASINResponse
     *
     * @throws MwsProductsException
     */
    public function getProductCategoriesForASIN($request)
    {
        return GetProductCategoriesForASINResponse::fromXML($this->_invoke('GetProductCategoriesForASIN'));
    }

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForSKU request or GetProductCategoriesForSKU object itself
     *
     * @see GetProductCategoriesForSKU
     * @return GetProductCategoriesForSKUResponse
     *
     * @throws MwsProductsException
     */
    public function getProductCategoriesForSKU($request)
    {
        return GetProductCategoriesForSKUResponse::fromXML($this->_invoke('GetProductCategoriesForSKU'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     *
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MwsProductsException
     */
    public function getServiceStatus($request)
    {
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for ListMatchingProducts request or ListMatchingProducts object itself
     *
     * @see ListMatchingProducts
     * @return ListMatchingProductsResponse
     *
     * @throws MwsProductsException
     */
    public function listMatchingProducts($request)
    {
        return ListMatchingProductsResponse::fromXML($this->_invoke('ListMatchingProducts'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' .
            $actionName . 'Response.xml', true);
    }

}
