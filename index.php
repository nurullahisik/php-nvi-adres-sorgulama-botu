<?php

require __DIR__ . "/vendor/autoload.php";

use NVI\Adres\AddressProperties;
use NVI\Adres\AddressInitialize;


$object = new AddressInitialize();
$object::init();

// Iller
$properties = new AddressProperties();
$properties->setType("cities");

$data = $object::create($properties);
print_r($data->getResult());

// Ilçeler
$properties = new AddressProperties();
$properties->setCityId(1);
$properties->setType("district");

$data = $object::create($properties);
print_r($data->getResult());

// Mahalle Koy
$properties = new AddressProperties();
$properties->setDistrictId(1757); // Il servisinden donen kimlikNo
$properties->setType("neighborhood");

$data = $object::create($properties);
print_r($data->getResult());

// Cadde Sokak
$properties = new AddressProperties();
$properties->setNeighborhoodId(176887); // Mahalle servisinden donen KimlikNo
$properties->setType("street");

$data = $object::create($properties);
print_r($data->getResult());

// Bina Listesi
$properties = new AddressProperties();
$properties->setNeighborhoodId(176887); // Mahalle servisinden donen KimlikNo
$properties->setStreetId(566149); // Cadde sokak servisinden donen KimlikNo
$properties->setType("building");

$data = $object::create($properties);
print_r($data->getResult());

// Bagımsız Bolum Listesi
$properties = new AddressProperties();
$properties->setNeighborhoodId(176887); // Mahalle servisinden donen KimlikNo
$properties->setBuildingId(205887102); // Bina servisinden donen kimlikNo
$properties->setType("door");

$data = $object::create($properties);
print_r($data->getResult());

// Açık Adres
$properties = new AddressProperties();
$properties->setDoorId(1652690); // Bagımsız bolum listesinden donen kimlikNo
$properties->setType("address");

$data = $object::create($properties);
print_r($data->getResult());




