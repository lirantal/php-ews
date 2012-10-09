<?php
/**
 * Definition of the CalendarPermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the CalendarPermissionSetType type
 */
class CalendarPermissionSetType extends EWSType
{
    /**
     * CalendarPermissions property
     *
     * @var EWSType_ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

    /**
     * UnknownEntries property
     *
     * @var EWSType_ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'CalendarPermissions',
                'required' => false,
                'type' => 'ArrayOfCalendarPermissionsType',
            ),
            array(
                'name' => 'UnknownEntries',
                'required' => false,
                'type' => 'ArrayOfUnknownEntriesType',
            ),
        );
    }
}
