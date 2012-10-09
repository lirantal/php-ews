<?php
/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 */
class NonEmptyArrayOfRestrictedGroupIdentifiersType extends EWSType
{
    /**
     * RestrictedGroupIdentifier property
     *
     * @var EWSType_SidAndAttributesType
     */
    public $RestrictedGroupIdentifier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RestrictedGroupIdentifier',
                'required' => false,
                'type' => 'SidAndAttributesType',
            ),
        );
    }
}
