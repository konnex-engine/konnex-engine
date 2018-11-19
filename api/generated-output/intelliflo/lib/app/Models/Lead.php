<?php
/**
 * Lead
 */
namespace KonnexEngine\Models;

/**
 * Lead
 */
class Lead {

    /** @var string $category */
    private $category;

    /** @var string $migrationReference */
    private $migrationReference;

    /** @var string $addressesHref */
    private $addressesHref;

    /** @var string $name */
    private $name;

    /** @var \KonnexEngine\Models\Campaign $campaign */
    private $campaign;

    /** @var string $type */
    private $type;

    /** @var string $contactdetailsHref */
    private $contactdetailsHref;

    /** @var string $relationshipsHref */
    private $relationshipsHref;

    /** @var string $partyType */
    private $partyType;

    /** @var \KonnexEngine\Models\Person $person */
    private $person;

    /** @var string $href */
    private $href;

    /** @var \DateTime $createdAt */
    private $createdAt;

    /** @var \KonnexEngine\Models\LeadAdviser $originalAdviser */
    private $originalAdviser;

    /** @var int $id Auto-generated if left blank*/
    private $id;

    /** @var \KonnexEngine\Models\Trust $trust */
    private $trust;

    /** @var \KonnexEngine\Models\Corporate $corporate */
    private $corporate;

    /** @var \KonnexEngine\Models\LeadAdviser $currentAdviser */
    private $currentAdviser;

    /** @var string $externalReference */
    private $externalReference;

    /** @var string $secondaryReference */
    private $secondaryReference;

}
