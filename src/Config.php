<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 20:15
 */

namespace NVI\Adres;

class Config
{
    /**
     * @return Options
     */
    public function options()
    {
        $options = new Options();
        $options->setHost('adres.nvi.gov.tr');
        $options->setReferer("https://adres.nvi.gov.tr/VatandasIslemleri/AdresSorgu");
        $options->setContentType("application/x-www-form-urlencoded");
        $options->setUserAgent("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36");
        $options->setXRequestedWith("XMLHttpRequest");

        return $options;
    }

    public function setConfig($config = [])
    {
        $file = fopen("header.conf", "w");
        fwrite($file, json_encode($config));
        fclose($file);
    }

}