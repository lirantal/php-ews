<?php
/**
 * Definition of the SubscribeResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SubscribeResponseMessageType type
 */
class SubscribeResponseMessageType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * @var EWSType_SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * @var EWSType_WatermarkType
     */
    public $Watermark;

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
            array(
                'name' => 'Watermark',
                'required' => false,
                'type' => 'WatermarkType',
            ),
        );
    }
}
