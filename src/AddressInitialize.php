<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 14:01
 */

namespace NVI\Adres;

use NVI\Adres\HTMLParser;

class AddressInitialize extends AddressResource
{

    public static function init()
    {
        $config = new Config();

        $options = $config->options();

        if (parent::getConfig($options)){
            return new AddressInitialize();
        }

        $properties = new AddressProperties();
        $properties->setType('home');

        $result = parent::init()->get(parent::getUrl($properties->getType()), parent::getHttpHeaders($options));

        $html_parser = new HTMLParser($result['body']);
        $request_verification_token = $html_parser->get();

        $header_parser = new HeaderParser($result['header']);
        $headers = $header_parser->get();
        $set_cookie = $headers[0]["Set-Cookie"];

        $config->setConfig([
            "__RequestVerificationToken" => $request_verification_token,
            "Cookie" => $set_cookie
        ]);

        return new AddressInitialize();
    }

    public static function create(AddressProperties $properties)
    {
        $config = new Config();

        $options = $config->options();

        $result = parent::init()->post(parent::getUrl($properties->getType()), parent::getHttpHeaders($options), parent::getHttpBody($properties));

        return AddressMapper::create($result['body'])->jsonDecode()->mapAddressResource(new AddressInitialize());

    }
}