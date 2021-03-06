<?php
/**
 * Definition of the CalendarPermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the CalendarPermissionType type
 */
class CalendarPermissionType extends EWSType
{
    /**
     * ReadItems property
     *
     * @var EWSType_CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * CalendarPermissionLevel property
     *
     * @var EWSType_CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ReadItems',
                'required' => false,
                'type' => 'CalendarPermissionReadAccessType',
            ),
            array(
                'name' => 'CalendarPermissionLevel',
                'required' => false,
                'type' => 'CalendarPermissionLevelType',
            ),
        );
    }
}
