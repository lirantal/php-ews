<?php
/**
 * Definition of the ArrayOfCalendarEvent type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfCalendarEvent type
 */
class ArrayOfCalendarEvent extends EWSType
{
    /**
     * CalendarEvent property
     *
     * @var EWSType_CalendarEvent
     */
    public $CalendarEvent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'CalendarEvent',
                'required' => false,
                'type' => 'CalendarEvent',
            ),
        );
    }
}
