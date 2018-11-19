<?php
/**
 * AddressObject
 */
namespace KonnexEngine\Models;

/**
 * AddressObject
 */
class AddressObject {

    /** @var string $locality */
    private $locality;

    /** @var \KonnexEngine\Models\CountryObject $country */
    private $country;

    /** @var string $line4 */
    private $line4;

    /** @var string $line3 */
    private $line3;

    /** @var string $line2 */
    private $line2;

    /** @var string $line1 */
    private $line1;

    /** @var \KonnexEngine\Models\CountyObject $county */
    private $county;

    /** @var string $postalCode */
    private $postalCode;

}
