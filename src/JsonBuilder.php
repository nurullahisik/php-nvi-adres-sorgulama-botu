<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 23:15
 */

namespace NVI\Adres;
class JsonBuilder
{

    private $json;

    public function __construct(array $json)
    {
        $this->json = $json;
    }

    public static function create()
    {
        return new JsonBuilder([]);
    }

    public function getObject()
    {
        return $this->json;
    }

    public static function jsonEncode($json)
    {
        return json_encode($json);
    }

    public static function jsonDecode($json)
    {
        return json_decode($json, true);
    }


}