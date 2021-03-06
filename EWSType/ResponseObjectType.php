<?php
/**
 * Definition of the ResponseObjectType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ResponseObjectType type
 */
class ResponseObjectType extends EWSType
{
    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ObjectName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
