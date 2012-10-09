<?php
/**
 * Definition of the PullSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the PullSubscriptionRequestType type
 */
class PullSubscriptionRequestType extends EWSType
{
    /**
     * Timeout property
     *
     * @var EWSType_SubscriptionTimeoutType
     */
    public $Timeout;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Timeout',
                'required' => false,
                'type' => 'SubscriptionTimeoutType',
            ),
        );
    }
}
