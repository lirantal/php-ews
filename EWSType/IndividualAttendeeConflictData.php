<?php
/**
 * Definition of the IndividualAttendeeConflictData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the IndividualAttendeeConflictData type
 */
class IndividualAttendeeConflictData extends EWSType
{
    /**
     * BusyType property
     *
     * @var EWSType_LegacyFreeBusyType
     */
    public $BusyType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'BusyType',
                'required' => false,
                'type' => 'LegacyFreeBusyType',
            ),
        );
    }
}
