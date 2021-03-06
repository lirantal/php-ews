<?php
/**
 * Definition of the ArrayOfCalendarPermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfCalendarPermissionsType type
 */
class ArrayOfCalendarPermissionsType extends EWSType
{
    /**
     * CalendarPermission property
     *
     * @var EWSType_CalendarPermissionType
     */
    public $CalendarPermission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'CalendarPermission',
                'required' => false,
                'type' => 'CalendarPermissionType',
            ),
        );
    }
}
