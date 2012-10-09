<?php
/**
 * Definition of the WorkingPeriod type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the WorkingPeriod type
 */
class WorkingPeriod extends EWSType
{
    /**
     * DayOfWeek property
     *
     * @var EWSType_DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * StartTimeInMinutes property
     *
     * @var integer
     */
    public $StartTimeInMinutes;

    /**
     * EndTimeInMinutes property
     *
     * @var integer
     */
    public $EndTimeInMinutes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DayOfWeek',
                'required' => false,
                'type' => 'DaysOfWeekType',
            ),
            array(
                'name' => 'StartTimeInMinutes',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'EndTimeInMinutes',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
