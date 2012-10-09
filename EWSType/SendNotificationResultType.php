<?php
/**
 * Definition of the SendNotificationResultType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SendNotificationResultType type
 */
class SendNotificationResultType extends EWSType
{
    /**
     * SubscriptionStatus property
     *
     * @var EWSType_SubscriptionStatusType
     */
    public $SubscriptionStatus;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SubscriptionStatus',
                'required' => false,
                'type' => 'SubscriptionStatusType',
            ),
        );
    }
}
