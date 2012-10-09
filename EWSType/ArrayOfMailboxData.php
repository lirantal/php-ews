<?php
/**
 * Definition of the ArrayOfMailboxData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfMailboxData type
 */
class ArrayOfMailboxData extends EWSType
{
    /**
     * MailboxData property
     *
     * @var EWSType_MailboxData
     */
    public $MailboxData;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'MailboxData',
                'required' => false,
                'type' => 'MailboxData',
            ),
        );
    }
}
