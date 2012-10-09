<?php
/**
 * Definition of the ModifiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ModifiedEventType type
 */
class ModifiedEventType extends EWSType
{
    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UnreadCount',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
