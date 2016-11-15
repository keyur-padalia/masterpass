<?php


namespace Dnetix\MasterPass\Converters;

require_once __DIR__ . '/../../lib/XML/Serializer.php';
require_once __DIR__ . '/../../lib/XML/Unserializer.php';

use Dnetix\MasterPass\Exception\SDKConversionException;
use Dnetix\MasterPass\Interfaces\SDKConverter;
use DOMDocument;
use DOMXPath;
use Exception;
use XML_Serializer;

/**
 * XMLConverter  - XML request and response converter
 */
class XMLConverter implements SDKConverter
{

    public $options = [
        XML_SERIALIZER_OPTION_INDENT => '    ',
        XML_SERIALIZER_OPTION_RETURN_RESULT => true,
        "typeHints" => false,
        "addDecl" => true,
        XML_SERIALIZER_OPTION_CLASSNAME_AS_TAGNAME => 'true',
        'mode' => 'simplexml',
    ];

    public $options_unserialize = [
        // Defines whether nested tags should be returned as associative arrays or objects.
        XML_UNSERIALIZER_OPTION_COMPLEXTYPE => 'object',

        // use the tagname as the classname
        XML_UNSERIALIZER_OPTION_TAG_AS_CLASSNAME => true,

        // name of the class that is used to create objects
        XML_UNSERIALIZER_OPTION_DEFAULT_CLASS => 'stdClass',

        // specify the target encoding
        XML_UNSERIALIZER_OPTION_ENCODING_TARGET => "UTF-8",

        // unserialize() returns the result of the unserialization instead of true
        XML_UNSERIALIZER_OPTION_RETURN_RESULT => true,

        // remove whitespace around data
        XML_UNSERIALIZER_OPTION_WHITESPACE => XML_UNSERIALIZER_WHITESPACE_TRIM,

    ];

    public function __construct()
    {
    }

    /**
     * Convert xml request body to string.
     */
    public function requestBodyConverter($objRequest)
    {
        $tagMapArray = [];

        try {
            if (!empty($objRequest)) {
                foreach ($objRequest as $key => $value) {
                    if (class_exists($key)) {
                        if (!empty($key::$attributeMap)) {
                            array_reverse($key::$attributeMap);
                            $tagMapArray = array_merge($tagMapArray, $key::$attributeMap);
                        }
                    }

                }
            }

            $this->options['XML_SERIALIZER_OPTION_TAGMAP'] = $tagMapArray;
            $serializer = new XML_Serializer($this->options);
            $result = $serializer->serialize($objRequest);

            $doc = new DOMDocument;
            $doc->preserveWhiteSpace = false;
            $doc->loadxml(utf8_encode($result));
            $xpath = new DOMXPath($doc);
            foreach ($xpath->query('//*[not(normalize-space())]') as $node) {
                $node->parentNode->removeChild($node);
            }
            $doc->formatOutput = true;
            $reqXML = $doc->savexml();

            return $reqXML;

        } catch (Exception $e) {
            throw new SDKConversionException($e, __class__);
        }

        return $result;
    }

    /**
     * Convert xml response object to the given response class type.
     * @param $xmlResponse | xml response body
     * @param $responseType | the response type to convert received response to specific response type.
     * @return $result_unserialize | De-serialized response, xml converted to object
     * @throws SDKConversionException |    If an exception occurred during response conversion.
     */
    public function responseBodyConverter($xmlResponse, $responseType)
    {
        $tagMapArray = [];
        try {
            foreach ($responseType::$attributeMap as $key => $val) {
                if (class_exists($key)) {
                    if (!empty($key::$attributeMap)) {
                        $tagMapArray = array_merge($tagMapArray, $key::$attributeMap);
                    }
                }
            }

            $this->options_unserialize['XML_UNSERIALIZER_OPTION_DEFAULT_CLASS'] = $responseType;
            $this->options_unserialize['XML_UNSERIALIZER_OPTION_TAG_MAP'] = $tagMapArray;

            $unserializer = new XML_Unserializer($this->options_unserialize);
            $result_unserialize = $unserializer->unserialize($xmlResponse, false, [XML_UNSERIALIZER_OPTION_TAG_MAP => $tagMapArray]);
        } catch (Exception $e) {
            throw new SDKConversionException($e, __class__);
        }
        return $result_unserialize;
    }


}

?>