<?php namespace RaffW\MwsProductApi\Model;

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

use RaffW\MwsProductApi\MwsProductsModel;

/**
 * GetProductCategoriesForASINResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetProductCategoriesForASINResult: GetProductCategoriesForASINResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetProductCategoriesForASINResponse extends MwsProductsModel {

    public function __construct($data = null)
    {
        $this->_fields = [
            'GetProductCategoriesForASINResult' => [
                'FieldValue' => null,
                'FieldType' => 'GetProductCategoriesForASINResult'
            ],
            'ResponseMetadata' => [
                'FieldValue' => null,
                'FieldType' => 'ResponseMetadata'
            ],
            'ResponseHeaderMetadata' => [
                'FieldValue' => null,
                'FieldType' => 'ResponseHeaderMetadata'
            ],
        ];

        parent::__construct($data);
    }

    /**
     * Construct GetProductCategoriesForASINResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetProductCategoriesForASINResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetProductCategoriesForASINResponse']");
        if ($response->length == 1)
        {
            return new GetProductCategoriesForASINResponse(($response->item(0)));
        }
        else
        {
            throw new \Exception ("Unable to construct GetProductCategoriesForASINResponse from provided XML.
                                  Make sure that GetProductCategoriesForASINResponse is a root element");
        }
    }

    /**
     * Get the value of the GetProductCategoriesForASINResult property.
     *
     * @return GetProductCategoriesForASINResult GetProductCategoriesForASINResult.
     */
    public function getGetProductCategoriesForASINResult()
    {
        return $this->_fields['GetProductCategoriesForASINResult']['FieldValue'];
    }

    /**
     * Check to see if GetProductCategoriesForASINResult is set.
     *
     * @return true if GetProductCategoriesForASINResult is set.
     */
    public function isSetGetProductCategoriesForASINResult()
    {
        return ! is_null($this->_fields['GetProductCategoriesForASINResult']['FieldValue']);
    }

    /**
     * Set the value of GetProductCategoriesForASINResult, return this.
     *
     * @param getProductCategoriesForASINResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetProductCategoriesForASINResult($value)
    {
        $this->setGetProductCategoriesForASINResult($value);

        return $this;
    }

    /**
     * Set the value of the GetProductCategoriesForASINResult property.
     *
     * @param GetProductCategoriesForASINResult getProductCategoriesForASINResult
     *
     * @return this instance
     */
    public function setGetProductCategoriesForASINResult($value)
    {
        $this->_fields['GetProductCategoriesForASINResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return ! is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     *
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return ! is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);

        return $this;
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     *
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetProductCategoriesForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetProductCategoriesForASINResponse>";

        return $xml;
    }

}
