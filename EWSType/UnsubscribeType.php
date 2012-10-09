<?php
/**
 * Definition of the UnsubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the UnsubscribeType type
 */
class UnsubscribeType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * @var EWSType_SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SubscriptionId',
                'required' => false,
                'type' => 'SubscriptionIdType',
            ),
        );
    }
}
