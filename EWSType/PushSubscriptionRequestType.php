<?php
/**
 * Definition of the PushSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends EWSType
{
    /**
     * StatusFrequency property
     *
     * @var EWSType_SubscriptionStatusFrequencyType
     */
    public $StatusFrequency;

    /**
     * URL property
     *
     * @var string
     */
    public $URL;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'StatusFrequency',
                'required' => false,
                'type' => 'SubscriptionStatusFrequencyType',
            ),
            array(
                'name' => 'URL',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
