<?php
/**
 * Contact
 */
namespace KonnexEngine\Models;

/**
 * Contact
 */
class Contact {

    /** @var string $type The type of contact details. Email, Telephone, Mobile, Fax, Home, Work, Business*/
    private $type;

    /** @var string $value The value of the contact detail*/
    private $value;

    /** @var bool $isDefault Is this the default contact detail*/
    private $isDefault;

}
