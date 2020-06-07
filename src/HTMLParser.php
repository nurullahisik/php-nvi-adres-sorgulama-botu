<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 23:35
 */

namespace NVI\Adres;

class HTMLParser
{
    private $request_verification_token;

    /*
     * @TODO input control will be added
     */
    public function __construct($html)
    {
        $dom = new \DOMDocument;

        @$dom->loadHTML($html);
        $dom->preserveWhiteSpace = false;

        $path = new \DOMXPath($dom);

        $inputs = $path->query('//input[@name="__RequestVerificationToken"]');
        $input  = $inputs->item(0);

        $this->request_verification_token = $input->getAttribute("value");
    }

    public function get()
    {
        return $this->request_verification_token;
    }

}
