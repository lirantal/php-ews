<?php
/**
 * Definition of the MessageXml type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the MessageXml type
 */
class MessageXml extends EWSType
{
    /**
     * any property
     *
     * @var string
     */
    public $any;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'any',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
