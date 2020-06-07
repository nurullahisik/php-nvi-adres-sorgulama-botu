<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 20:06
 */

namespace NVI\Adres;

class AddressProperties extends HttpClient
{
    private $type;
    private $types = [
        'home'             => 'VatandasIslemleri/AdresSorgu',
        'cities'           => 'Harita/ilListesi',
        'district'         => 'Harita/ilceListesi',
        'neighborhood'     => 'Harita/mahalleKoyBaglisiListesi',
        'street'           => 'Harita/yolListesi',
        'building'         => 'Harita/binaListesi',
        'door'             => 'Harita/bagimsizBolumListesi',
        'address'          => 'Harita/AcikAdres'
    ];

    private $city_id;
    private $district_id;
    private $neighborhood_id;
    private $street_id;
    private $building_id;
    private $door_id;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        if ( !isset($this->types[$type]) ) {
            trigger_error("Type of undefined");
            exit;
        }

        $this->type = $this->types[$type];
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param mixed $city_id
     */
    public function setCityId($city_id): void
    {
        $this->city_id = $city_id;
    }

    /**
     * @return mixed
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }

    /**
     * @param mixed $district_id
     */
    public function setDistrictId($district_id): void
    {
        $this->district_id = $district_id;
    }

    /**
     * @return mixed
     */
    public function getNeighborhoodId()
    {
        return $this->neighborhood_id;
    }

    /**
     * @param mixed $neighborhood_id
     */
    public function setNeighborhoodId($neighborhood_id): void
    {
        $this->neighborhood_id = $neighborhood_id;
    }

    /**
     * @return mixed
     */
    public function getStreetId()
    {
        return $this->street_id;
    }

    /**
     * @param mixed $street_id
     */
    public function setStreetId($street_id): void
    {
        $this->street_id = $street_id;
    }

    /**
     * @return mixed
     */
    public function getBuildingId()
    {
        return $this->building_id;
    }

    /**
     * @param mixed $building_id
     */
    public function setBuildingId($building_id): void
    {
        $this->building_id = $building_id;
    }

    /**
     * @return mixed
     */
    public function getDoorId()
    {
        return $this->door_id;
    }

    /**
     * @param mixed $door_id
     */
    public function setDoorId($door_id): void
    {
        $this->door_id = $door_id;
    }


}