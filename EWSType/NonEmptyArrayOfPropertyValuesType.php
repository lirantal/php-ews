<?php
/**
 * Definition of the NonEmptyArrayOfPropertyValuesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfPropertyValuesType type
 */
class NonEmptyArrayOfPropertyValuesType extends EWSType
{
    /**
     * Value property
     *
     * @var string
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
                'type' => 'string',
            ),
        );
    }
}
