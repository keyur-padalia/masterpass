<?php

namespace Dnetix\MasterPass\Converters;

use Dnetix\MasterPass\Exception\SDKConversionException;

class SDKConverterFactory
{

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
     */
    public static function getConverter($format)
    {
        switch ($format) {
            case SDKConverterFactory::XML:
                return new XMLConverter();
            case SDKConverterFactory::URLENCODED:
                return new EncodedURLConverter();
            case SDKConverterFactory::JSON:
                return new JSONConverter();
            default:
                throw new SDKConversionException("Converter not found for the format " . $format, "Converter not found for $format format");
        }
    }
}
