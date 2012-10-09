<?php
/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 */
class AbsoluteYearlyRecurrencePatternType extends EWSType
{
    /**
     * DayOfMonth property
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Month property
     *
     * @var EWSType_MonthNamesType
     */
    public $Month;

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
            array(
                'name' => 'Month',
                'required' => false,
                'type' => 'MonthNamesType',
            ),
        );
    }
}
