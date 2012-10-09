<?php
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 */
class NonEmptyArrayOfGroupIdentifiersType extends EWSType
{
    /**
     * GroupIdentifier property
     *
     * @var EWSType_SidAndAttributesType
     */
    public $GroupIdentifier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'GroupIdentifier',
                'required' => false,
                'type' => 'SidAndAttributesType',
            ),
        );
    }
}
