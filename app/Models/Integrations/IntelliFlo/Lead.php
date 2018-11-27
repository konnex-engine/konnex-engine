<?php
/**
 * Lead
 */
namespace KonnexEngine\Models\Integrations\IntelliFlo;
use Illuminate\Database\Eloquent\Model;

/**
 * Lead
 */
class Lead extends Model {

    /** @var string $category */
    private $category;

    /** @var string $migrationReference */
    private $migrationReference;

    /** @var string $addressesHref */
    private $addressesHref;

    /** @var string $name */
    private $name;

    /** @var \KonnexEngine\Models\Integrations\IntelliFlo\Campaign $campaign */
    private $campaign;

    /** @var string $type */
    private $type;

    /** @var string $contactdetailsHref */
    private $contactdetailsHref;

    /** @var string $relationshipsHref */
    private $relationshipsHref;

    /** @var string $partyType */
    private $partyType;

    /** @var \KonnexEngine\Models\Integrations\IntelliFlo\\Integrations\IntelliFloPerson $person */
    private $person;

    /** @var string $href */
    private $href;

    /** @var \DateTime $createdAt */
    private $createdAt;

    /** @var \KonnexEngine\Models\Integrations\IntelliFlo\\Integrations\IntelliFloLeadAdviser $originalAdviser */
    private $originalAdviser;

    /** @var int $id Auto-generated if left blank*/
    private $id;

    /** @var \KonnexEngine\Models\Integrations\IntelliFlo\\Integrations\IntelliFloTrust $trust */
    private $trust;

    /** @var \KonnexEngine\Models\Integrations\IntelliFlo\\Integrations\IntelliFloCorporate $corporate */
    private $corporate;

    /** @var \KonnexEngine\Models\Integrations\IntelliFlo\\Integrations\IntelliFloLeadAdviser $currentAdviser */
    private $currentAdviser;

    /** @var string $externalReference */
    private $externalReference;

    /** @var string $secondaryReference */
    private $secondaryReference;

}
