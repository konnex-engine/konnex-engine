<?php
/**
 * CreateCompanyForm
 */
namespace KonnexEngine\Models;

/**
 * CreateCompanyForm
 */
class CreateCompanyForm {

    /** @var int $userID The user ID of the Konnex User creating the company (first Admin user).*/
    private $userID;

    /** @var \KonnexEngine\Models\CompanyName $name */
    private $name;

}
