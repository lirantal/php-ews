<?php
/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 */
class NonEmptyArrayOfNotificationEventTypesType extends EWSType
{
    /**
     * EventType property
     *
     * @var EWSType_NotificationEventTypeType
     */
    public $EventType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'EventType',
                'required' => false,
                'type' => 'NotificationEventTypeType',
            ),
        );
    }
}
