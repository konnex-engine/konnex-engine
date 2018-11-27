<?php
/**
 * Corporate
 */
namespace KonnexEngine\Models\Integrations\IntelliFlo;

use Illuminate\Database\Eloquent\Model;
/**
 * Corporate
 */
class Corporate extends Model {

    /** @var string $businessType */
    private $businessType;

    /** @var string $name */
    private $name;

    /** @var string $companyRegistrationNumber */
    private $companyRegistrationNumber;

    /** @var bool $isVatRegistered */
    private $isVatRegistered;

    /** @var string $vatRegistrationNumber */
    private $vatRegistrationNumber;

    /** @var string $type */
    private $type;

    /** @var \DateTime $establishedOrIncorporatedOn */
    private $establishedOrIncorporatedOn;

}
