<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 14:10
 */

namespace NVI\Adres;

class HttpClient extends Curl
{

    public static function init()
    {
        return new HttpClient();
    }

    protected static function getHttpHeaders(Options $options)
    {
        self::getConfig($options);

        $headers = [
            "Content-Type: " . $options->getContentType(),
            "Host: " . $options->getHost(),
            "Referer: " . $options->getReferer(),
            "User-Agent: " . $options->getUserAgent(),
            "X-Requested-With: " . $options->getXRequestedWith(),
        ];

        if ( !empty($options->getRequestVerificationToken()) ){
            $headers[] = "__RequestVerificationToken: " . $options->getRequestVerificationToken();
        }

        if ( !empty($options->getCookie()) ) {
            $headers[] = "Cookie: " . $options->getCookie();
        }

        return $headers;

    }

    protected static function getHttpBody(AddressProperties $properties)
    {
        return [
            "ilKimlikNo"                => $properties->getCityId(),
            "ilceKimlikNo"              => $properties->getDistrictId(),
            "mahalleKoyBaglisiKimlikNo" => $properties->getNeighborhoodId(),
            "yolKimlikNo"               => $properties->getStreetId(),
            "binaKimlikNo"              => $properties->getBuildingId(),
            "bagimsizBolumKayitNo"      => $properties->getDoorId(),
            "bagimsizBolumAdresNo"      => ""
        ];
    }

    protected static function getUrl($url)
    {
        $url = "https://adres.nvi.gov.tr/" . $url;

        return $url;
    }

    public static function getConfig(Options $options)
    {
        if (file_exists("header.conf")) {
            $header_config = file_get_contents("header.conf");

            if (!empty($header_config)) {
                $header_config = json_decode($header_config, true);

                if (isset($header_config["__RequestVerificationToken"]))
                    $options->setRequestVerificationToken($header_config["__RequestVerificationToken"]);

                if (isset($header_config["Cookie"]))
                    $options->setCookie($header_config["Cookie"]);

                if (isset($header_config["__RequestVerificationToken"]) && isset($header_config["Cookie"]))
                    return true;

            }
        }

        return false;
    }

}