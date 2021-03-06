<?php
/**
 * Definition of the NumberedRecurrenceRangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NumberedRecurrenceRangeType type
 */
class NumberedRecurrenceRangeType extends EWSType
{
    /**
     * NumberOfOccurrences property
     *
     * @var integer
     */
    public $NumberOfOccurrences;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'NumberOfOccurrences',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
