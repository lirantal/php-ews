<?php
/**
 * Definition of the SendNotificationResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SendNotificationResponseMessageType type
 */
class SendNotificationResponseMessageType extends EWSType
{
    /**
     * Notification property
     *
     * @var EWSType_NotificationType
     */
    public $Notification;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Notification',
                'required' => false,
                'type' => 'NotificationType',
            ),
        );
    }
}
