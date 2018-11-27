<?php
/**
 * TerritorialProfile
 */
namespace KonnexEngine\Models\Integrations\IntelliFlo;

use Illuminate\Database\Eloquent\Model;
/**
 * TerritorialProfile
 */
class TerritorialProfile extends Model {

    /** @var bool $expatriate */
    private $expatriate;

    /** @var bool $ukDomicile */
    private $ukDomicile;

    /** @var string $countryOfBirth */
    private $countryOfBirth;

    /** @var bool $ukResident */
    private $ukResident;

}
