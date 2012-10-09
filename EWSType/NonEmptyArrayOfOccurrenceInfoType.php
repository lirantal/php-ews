<?php
/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 */
class NonEmptyArrayOfOccurrenceInfoType extends EWSType
{
    /**
     * Occurrence property
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $Occurrence;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Occurrence',
                'required' => false,
                'type' => 'OccurrenceInfoType',
            ),
        );
    }
}
