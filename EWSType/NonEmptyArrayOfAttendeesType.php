<?php
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 */
class NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Attendee property
     *
     * @var EWSType_AttendeeType
     */
    public $Attendee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Attendee',
                'required' => false,
                'type' => 'AttendeeType',
            ),
        );
    }
}
