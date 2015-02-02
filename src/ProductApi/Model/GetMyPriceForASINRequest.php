<?php namespace MwsProductApi\Model;

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

use MwsProductApi\MwsProductsModel;

/**
 * GetMyPriceForASINRequest
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>ASINList: ASINListType</li>
 *
 * </ul>
 */
class GetMyPriceForASINRequest extends MwsProductsModel {

    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
            'MWSAuthToken' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
            'MarketplaceId' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
            'ASINList' => [
                'FieldValue' => null,
                'FieldType' => 'ASINListType'
            ],
        ];

        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return ! is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);

        return $this;
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     *
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return ! is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     *
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return ! is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);

        return $this;
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     *
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the ASINList property.
     *
     * @return ASINListType ASINList.
     */
    public function getASINList()
    {
        return $this->_fields['ASINList']['FieldValue'];
    }

    /**
     * Check to see if ASINList is set.
     *
     * @return true if ASINList is set.
     */
    public function isSetASINList()
    {
        return ! is_null($this->_fields['ASINList']['FieldValue']);
    }

    /**
     * Set the value of ASINList, return this.
     *
     * @param asinList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASINList($value)
    {
        $this->setASINList($value);

        return $this;
    }

    /**
     * Set the value of the ASINList property.
     *
     * @param ASINListType asinList
     *
     * @return this instance
     */
    public function setASINList($value)
    {
        $this->_fields['ASINList']['FieldValue'] = $value;

        return $this;
    }

}
