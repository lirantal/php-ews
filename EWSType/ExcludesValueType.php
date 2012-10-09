<?php
/**
 * Definition of the ExcludesValueType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ExcludesValueType type
 */
class ExcludesValueType extends EWSType
{
    /**
     * Value property
     *
     * @var EWSType_ExcludesAttributeType
     */
    public $Value;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Value',
                'required' => false,
                'type' => 'ExcludesAttributeType',
            ),
        );
    }
}
