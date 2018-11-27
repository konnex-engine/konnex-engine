<?php
/**
 * HealthProfile
 */
namespace KonnexEngine\Models\Integrations\IntelliFlo;

use Illuminate\Database\Eloquent\Model;
/**
 * HealthProfile
 */
class HealthProfile  extends Model {

    /** @var bool $inGoodHealth */
    private $inGoodHealth;

    /** @var string $isSmoker */
    private $isSmoker;

    /** @var bool $smokedInLast12Months */
    private $smokedInLast12Months;

}
