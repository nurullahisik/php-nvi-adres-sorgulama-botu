<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 21:09
 */

namespace NVI\Adres;
class AddressMapper extends AddressResourceMapper
{
    private $json_object;

    public function __construct($json_object)
    {
        $this->json_object = $json_object;
    }

    public static function create($json_object = null)
    {
        return new AddressMapper($json_object);
    }

    public function jsonDecode()
    {
        $this->json_object = JsonBuilder::jsonDecode($this->json_object);

        return $this;
    }

    public function mapAddressResource(AddressResource $addressResource)
    {
        parent::mapAddress($addressResource, $this->json_object);

        return $addressResource;
    }
}