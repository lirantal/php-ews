<?php
/**
 * Definition of the BaseNotificationEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BaseNotificationEventType type
 */
class BaseNotificationEventType extends EWSType
{
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
                'name' => 'Watermark',
                'required' => false,
                'type' => 'WatermarkType',
            ),
        );
    }
}
