<?php
/**
 * Definition of the SubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends EWSType
{
    /**
     * PullSubscriptionRequest property
     *
     * @var EWSType_PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var EWSType_PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'PullSubscriptionRequest',
                'required' => false,
                'type' => 'PullSubscriptionRequestType',
            ),
            array(
                'name' => 'PushSubscriptionRequest',
                'required' => false,
                'type' => 'PushSubscriptionRequestType',
            ),
        );
    }
}
