<?php
/**
 * Definition of the InternetHeaderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the InternetHeaderType type
 */
class InternetHeaderType extends EWSType
{
    /**
     * _ property
     *
     * @var string
     */
    public $_;

    /**
     * HeaderName property
     *
     * @var string
     */
    public $HeaderName;

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
                'name' => 'HeaderName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
