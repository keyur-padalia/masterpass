<?php

namespace Dnetix\MasterPass\Converters;
use Dnetix\MasterPass\Exception\SDKConversionException;
use Dnetix\MasterPass\Interfaces\SDKConverter;
use Exception;
use ReflectionClass;

/**
 * EncodedURLConverter - To convert response from request token api & parse it & return
 */
class EncodedURLConverter implements SDKConverter
{

    public function requestBodyConverter($objRequest)
    {
    }

    /**
     * Generic method for access & request token response object set parameters
     **/
    private function GetTokenResponse($responseString, $responseType)
    {

        //Instantiate the object
        $resObj = new $responseType();

        //Instantiate the reflection object
        $reflector = new ReflectionClass($responseType);

        //Now get all the properties from class $responseType in to $properties array
        $properties = $reflector->getProperties();

        //Now go through the $properties array and populate each property
        foreach ($properties as $property) {
            foreach ($responseString as $key => $value) {
                $param = $property->name;

                if ($this->to_camel_case($key) == $param) {
                    //Populating properties with response variables
                    $resObj->$param = $value;
                }
            }

        }

        // returning class object with response variables set to class params
        return $resObj;
    }

    /**
     * Method used to parse the connection response and return a array of the data
     */
    public function responseBodyConverter($responseString, $responseType)
    {

        $token = [];
        foreach (explode("&", $responseString) as $p) {
            @list($name, $value) = explode("=", $p, 2);
            $token[$name] = urldecode($value);
        }
        try {
            $result = $this->GetTokenResponse($token, $responseType);
            return $result;
        } catch (Exception $e) {
            throw new SDKConversionException($e, __class__);
        }

    }

    /**
     * Translates a string with underscores
     * into camel case (e.g. first_name -> firstName)
     *
     * @param string $str String in underscore format
     * @param bool $capitalise_first_char If true, capitalise the first char in $str
     * @return string $str translated into camel caps
     */
    function to_camel_case($str, $capitalise_first_char = true)
    {
        if ($capitalise_first_char) {
            $str[0] = strtoupper($str[0]);
        }
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_([a-z])/', $func, $str);
    }

}
