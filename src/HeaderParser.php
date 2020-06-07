<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 6.06.2020
 * Time: 10:33
 */

namespace NVI\Adres;


class HeaderParser
{
    private $headers = [];

    public function __construct($headerContent)
    {
        $headers = array();

        $arrRequests = explode("\r\n\r\n", $headerContent);

        for ($index = 0; $index < count($arrRequests) -1; $index++) {

            foreach (explode("\r\n", $arrRequests[$index]) as $i => $line)
            {
                if ($i === 0)
                    $headers[$index]['http_code'] = $line;
                else
                {
                    list ($key, $value) = explode(': ', $line);
                    if (isset($headers[$index][$key])){
                        $headers[$index][$key] = $headers[$index][$key] . ";" . $value;
                    } else {
                        $headers[$index][$key] = $value;
                    }

                }
            }
        }

        $this->headers = $headers;
    }

    public function get()
    {
        return $this->headers;
    }

}