<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 20:38
 */

namespace NVI\Adres;

class AddressResource extends HttpClient
{

    private $result;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }


}