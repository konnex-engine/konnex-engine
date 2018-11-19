<?php
/**
 * Address
 */
namespace KonnexEngine\Models;

/**
 * Address
 */
class Address {

    /** @var string $status */
    private $status;

    /** @var \DateTime $residentFrom */
    private $residentFrom;

    /** @var string $href */
    private $href;

    /** @var string $residencyStatus */
    private $residencyStatus;

    /** @var \KonnexEngine\Models\AddressObject $address */
    private $address;

    /** @var string $type */
    private $type;

    /** @var int $id Auto-generated if left blank*/
    private $id;

    /** @var bool $isDefault */
    private $isDefault;

}
