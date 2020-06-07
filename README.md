# PHP ile NVI Adres Sorgulama Botu

**İçerik**
1. [Uyarılar](#warnings)
2. [Linkler](#links)
3. [Kurulum](#installation)
4. [Kullanım](#usage)
5. [Veriler](#cities)
   1. [İller](#cities)
   2. [İlçeler](#district)
   4. [Mahalle-Köy](#neighborhood)
   5. [Cadde-Sokak](#street)
   6. [Bina](#building)
   7. [Bağımsız Bölüm (İç Kapı)](#door)
   8. [Açık Adres](#address)


**Package**

- (https://packagist.org/packages/nurullah/php-nvi-adres-sorgulama-botu)

<a name="warnings"></a>
### Uyarılar

Adres sorgulama botu İçişleri Bakanlığına bağlı Nüfus Vatandaşlık işleri Genel Müdürlüğünden verileri çekmektedir. 

Yapılan her istek (https://adres.nvi.gov.tr/VatandasIslemleri/AdresSorgu) adresine yollanır. 

Çok fazla istek yaparsanız ban yiyebilirsiniz.  


<a name="links"></a>
### Linkler

Nüfus ve Vatandaşlık İşleri Genel Müdürlüğü (https://adres.nvi.gov.tr/VatandasIslemleri/AdresSorgu)

<a name="installation"></a>
### Kurulum
```
composer require nurullah/php-nvi-adres-sorgulama-botu
```
Kurulum işlemi tamamlandıktan sonra dosyalar vendor klasörü altına gelecektir. Kullanım için aşağıdaki adımları izleyin.

<a name="usage"></a>
### Kullanım
    <?php
        include __DIR__.'/vendor/autoload.php';
        
        use NVI\Adres\AddressProperties;
        use NVI\Adres\AddressInitialize;
        
        $object = new AddressInitialize();
        $object::init();
    ?>


<a name="cities"></a>
### İller
    <?php
        $properties = new AddressProperties();
        $properties->setType("cities");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>


<a name="district"></a>
### İlçeler
    <?php
        $properties = new AddressProperties();
        $properties->setCityId(1);
        $properties->setType("district");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>

<a name="neighborhood"></a>
### Mahalle
    <?php
        $properties = new AddressProperties();
        $properties->setDistrictId(1757); // Il servisinden donen kimlikNo
        $properties->setType("neighborhood");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>


<a name="street"></a>
### Cadde-Sokak
    <?php
        $properties = new AddressProperties();
        $properties->setNeighborhoodId(176887); // Mahalle servisinden donen KimlikNo
        $properties->setType("street");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>


<a name="building"></a>
### Binalar
    <?php
        $properties = new AddressProperties();
        $properties->setNeighborhoodId(176887); // Mahalle servisinden donen KimlikNo
        $properties->setStreetId(566149); // Cadde sokak servisinden donen KimlikNo
        $properties->setType("building");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>


<a name="door"></a>
### Bağımsız Bölüm(İç Kapı)
    <?php
        $properties = new AddressProperties();
        $properties->setNeighborhoodId(176887); // Mahalle servisinden donen KimlikNo
        $properties->setBuildingId(205887102); // Bina servisinden donen kimlikNo
        $properties->setType("door");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>
    

<a name="address"></a>
### Açık Adres
    <?php
        $properties = new AddressProperties();
        $properties->setDoorId(1652690); // Bagımsız bolum listesinden donen kimlikNo
        $properties->setType("address");
        
        //result
        print_r($object::create($properties)->getResult());
    ?>
   
