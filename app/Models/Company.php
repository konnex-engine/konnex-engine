<?php
/**
 * Company
 */
namespace KonnexEngine\Models;

/**
 * Company
 */
class Company {

    /** @var int $id The company ID*/
    private $id;

    /** @var \KonnexEngine\Models\CompanyName $name */
    private $name;

    /** @var bool $isLimited */
    private $isLimited;

    /** @var string $registrationNumber */
    private $registrationNumber;

    /** @var string $legalStatus The legal status of the company. MUST be \&quot;Private Limited by Shares\&quot;, \&quot;Private Limited by Guarantee\&quot;, \&quot;Public Limited Company\&quot;, \&quot;\&quot;*/
    private $legalStatus;

    /** @var \KonnexEngine\Models\Links $links */
    private $links;

    /** @var int $adminUserID The user ID of the current Super Administrator*/
    private $adminUserID;

}
