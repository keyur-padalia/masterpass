<?php

namespace Dnetix\MasterPass\Converters;

/**
 * To return specific converter object depending on request and response content type.
 * @category Class | SDKConverterFactory
 * @package  MasterCardCoreSDK
 * @subpackage  Converters
 */

class SDKConverterFactory
{
    private $xml;
    private $urlEncoded;
    private $json;

    /** @const XML | Check to return XML converter object * */
    const XML = "XML";

    /** @const JSON | Check to return JSON converter object * */
    const JSON = "JSON";

    /** @const URLENCODED | Check to return URLENCODED converter object * */
    const URLENCODED = "X-WWW-FORM-URLENCODED";

    public function __construct()
    {

    }

    /**
     * Return specific converter object depending on request and response content type.
     * @param $format | the content type format of request/response.
     * @return $object | Specific converter object
     * @throws Exception
     */
    public static function getConverter($format)
    {

        switch ($format) {
            case SDKConverterFactory::XML:
                return $xml = new XMLConverter();
            case SDKConverterFactory::URLENCODED:
                return $urlEncoded = new EncodedURLConverter();
            case SDKConverterFactory::JSON:
                return $json;
            default:
                throw new SDKConversionException("Converter not found for the format " . $format, "Converter not found for $format format");
        }
    }
}

?>