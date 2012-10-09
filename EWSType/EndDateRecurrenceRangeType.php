<?php
/**
 * Definition of the EndDateRecurrenceRangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the EndDateRecurrenceRangeType type
 */
class EndDateRecurrenceRangeType extends EWSType
{
    /**
     * EndDate property
     *
     * @var EWSType_date
     */
    public $EndDate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'EndDate',
                'required' => false,
                'type' => 'date',
            ),
        );
    }
}
