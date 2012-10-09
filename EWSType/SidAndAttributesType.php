<?php
/**
 * Definition of the SidAndAttributesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SidAndAttributesType type
 */
class SidAndAttributesType extends EWSType
{
    /**
     * SecurityIdentifier property
     *
     * @var string
     */
    public $SecurityIdentifier;

    /**
     * Attributes property
     *
     * @var EWSType_unsignedInt
     */
    public $Attributes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SecurityIdentifier',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Attributes',
                'required' => false,
                'type' => 'unsignedInt',
            ),
        );
    }
}
