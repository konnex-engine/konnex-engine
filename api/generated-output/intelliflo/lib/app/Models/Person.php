<?php
/**
 * Person
 */
namespace KonnexEngine\Models;

/**
 * Person
 */
class Person {

    /** @var string $maritalStatus */
    private $maritalStatus;

    /** @var string $niNumber */
    private $niNumber;

    /** @var \DateTime $maritalStatusSince */
    private $maritalStatusSince;

    /** @var string $firstName */
    private $firstName;

    /** @var string $title */
    private $title;

    /** @var string $middleName */
    private $middleName;

    /** @var string $lastName */
    private $lastName;

    /** @var string $maidenName */
    private $maidenName;

    /** @var \KonnexEngine\Models\NationalityCountry $nationalityCountry */
    private $nationalityCountry;

    /** @var string $dateOfBirth */
    private $dateOfBirth;

    /** @var string $nationalClientIdentifier National Insurance or Social Security Number equivalent*/
    private $nationalClientIdentifier;

    /** @var string $deceasedOn */
    private $deceasedOn;

    /** @var \KonnexEngine\Models\HealthProfile $healthProfile */
    private $healthProfile;

    /** @var \KonnexEngine\Models\TerritorialProfile $territorialProfile */
    private $territorialProfile;

    /** @var bool $isWillUptoDate */
    private $isWillUptoDate;

    /** @var string $gender */
    private $gender;

    /** @var string $salutation */
    private $salutation;

    /** @var bool $isDeceased */
    private $isDeceased;

    /** @var string $nationality */
    private $nationality;

    /** @var bool $hasWill */
    private $hasWill;

    /** @var bool $isPowerOfAttorneyGranted */
    private $isPowerOfAttorneyGranted;

}
