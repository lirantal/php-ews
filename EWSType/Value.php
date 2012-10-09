<?php
/**
 * Definition of the Value type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the Value type
 */
class Value extends EWSType
{
    /**
     * _ property
     *
     * @var string
     */
    public $_;

    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => '_',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Name',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
