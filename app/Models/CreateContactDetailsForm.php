<?php
/**
 * CreateContactDetailsForm
 */
namespace KonnexEngine\Models;

/**
 * CreateContactDetailsForm
 */
class CreateContactDetailsForm {

    /** @var string $type The type of contact detail. Email, Telephone, Mobile, Fax, Home, Work, Business, Facebook, Twitter, Instagram*/
    private $type;

    /** @var string $value The value of the contact detail*/
    private $value;

    /** @var bool $isDefault Is this the default contact detail*/
    private $isDefault;

}
