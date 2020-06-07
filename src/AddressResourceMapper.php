<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 23:10
 */

namespace NVI\Adres;
class AddressResourceMapper
{
    public function mapAddress(AddressResource $notificationResource, $json_object)
    {
        if ( isset($json_object) ) {
            $notificationResource->setResult($json_object);
        }
    }
}