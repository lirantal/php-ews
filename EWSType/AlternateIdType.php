<?php
/**
 * Definition of the AlternateIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AlternateIdType type
 */
class AlternateIdType extends EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * Mailbox property
     *
     * @var EWSType_NonEmptyStringType
     */
    public $Mailbox;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Mailbox',
                'required' => false,
                'type' => 'NonEmptyStringType',
            ),
        );
    }
}
