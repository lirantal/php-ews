<?php
/**
 * Definition of the AbsoluteMonthlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AbsoluteMonthlyRecurrencePatternType type
 */
class AbsoluteMonthlyRecurrencePatternType extends EWSType
{
    /**
     * DayOfMonth property
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DayOfMonth',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
