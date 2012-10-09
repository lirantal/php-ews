<?php
/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 */
class RelativeMonthlyRecurrencePatternType extends EWSType
{
    /**
     * DaysOfWeek property
     *
     * @var EWSType_DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * @var EWSType_DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DaysOfWeek',
                'required' => false,
                'type' => 'DayOfWeekType',
            ),
            array(
                'name' => 'DayOfWeekIndex',
                'required' => false,
                'type' => 'DayOfWeekIndexType',
            ),
        );
    }
}
